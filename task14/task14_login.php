<?php

session_start();

if (isset($_POST['password']) && isset($_POST['email'])){
    $password = $_POST['password'];
    $login = $_POST['email'];

    $pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");
    $sql = "SELECT * FROM `users` where `login` = :login";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['login' => $login]);
    $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

    // дальше говнокод, кажется можно сделать лучше
    if (!empty($result)){

        foreach ($result as $row) {
            if ( password_verify($password, $row["password"]) ){

                $_SESSION['user']['id'] = $row["id"];
                $_SESSION['user']['id'] = $row["login"];

                $_SESSION['message'] = 'Вы вошли в аккаунт';

                header('Location: task_14.php');
                exit;
            }
        }
    }

    $_SESSION['message'] = 'Неправильный логин или пароль!';
    
}

header('Location: task_14.php');



