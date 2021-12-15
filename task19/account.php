<?php
session_start();
if (!isset($_SESSION['user']['id'])){
    redirect_to ('reg.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой аккаунт</title>
</head>
<body>
    <h1>Здравствуйте, <?=$_SESSION['user']['email']?></h1>
    <h2>Возможности редактировать профиль пока нет(</h2>
    <a href="index.php">Наш чат</a>
</body>
</html>