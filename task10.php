<?php

session_start();

if (isset($_POST['text'])){

    $text = $_POST['text'];

    $pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");
    $sql = "SELECT * FROM `test` where `text` = :text";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['text' => $text]);
    $task = $statement -> fetchAll(PDO::FETCH_ASSOC);

    if (!empty($task)) {

        $_SESSION['message'] = 'такое сообщение уже есть';

    } else {

        $sql = "INSERT INTO `test` (`text`) VALUES (:text); ";
        $statement = $pdo -> prepare($sql);
        $statement -> execute(['text' => $text]);

        $_SESSION['message'] = 'сообщение успешно отправлено';
    }

} else {

    $_SESSION['message'] = '';
    // $_SESSION['message'] = 'введите текст'; 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="task10.php" method="post">

        <input type="text" name="text">
        <button type="submit">Submit</button>

        <?php if (empty($_SESSION['text'])):?>
            <span><?=$_SESSION['message']?></span>
        <?php endif ?>

    </form>
    
</body>
</html>

<?php 

unset($_SESSION['message']);


