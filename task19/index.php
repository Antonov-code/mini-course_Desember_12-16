<?php
session_start();
include_once 'handlers/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <main class="main">
                <?php if (isset($_SESSION['message'])): ?>
                    <span class="message">
                        <?=$_SESSION['message']?>
                    </span>
                <?php
                    unset($_SESSION['message']);
                    endif;
                ?>
                <div class="messenger">
                    <?php
                    $messages = get_messages ('15');
                    foreach ($messages as $message): 
                        $user_data = get_user_by_id ($message['user_id']); ?>
                        <div class="message">
                            <span>Сообщение: <?=$message['text']?> | </span>
                            <span>от: <?=$user_data['login']?></span>
                        </div>
                    <?php endforeach; ?>

                    <?php if (isset($_SESSION['user']['id'])): ?>
                        <form action="handlers/message_handler.php" method="post">
                            <input type="text" name="message">
                            <button type="submit">Отправить сообщение</button>
                            <a href="account.php"> Мой профиль </a> |
                            <a href="handlers/logout.php"> Выйти </a>
                        </form>
                    <?php endif ?>
                    <!-- тут код повторяется, но я не знаю, что можно с этим сделать -->
                    <?php if (!isset($_SESSION['user']['id'])): ?>
                        <a href="reg.php">Зарегистрируйтесь, чтобы писать сообщения</a>
                    <?php endif ?>
                </div>
            </main>
        </div>
    </div>
</body>
</html>