<?php

if (isset($_POST['text'])){

    $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");
    $sql = "INSERT INTO `test` (`text`) VALUES (:text); ";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['text' => $text]);

    echo "текст успешно добавлен";

} else {

    echo "введите текст";
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="task9.php" method="post">
        <input type="text" name="text">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>