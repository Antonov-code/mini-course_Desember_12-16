<?php
session_start();
require_once 'handlers/functions.php';

if (isset($_SESSION['user']['id'])){
    redirect_to ('index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <main class="main">
                <form action="handlers/login_handler.php" method="post">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Пароль">
                    <button type="submit">Авторизоваться</button>
                </form>
                <?php if (isset($_SESSION['message'])): ?>
                    <span class="message">
                        <?=$_SESSION['message']?>
                    </span>
                <?php
                    unset($_SESSION['message']);
                    endif;
                ?>
                <a href="reg.php">Ещё нет аккаунта?</a>
            </main>
        </div>
    </div>
</body>
</html>