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

        foreach ($result as $hash) {
            if ( password_verify($password, $hash["password"]) ){
                $_SESSION['message'] = 'Вы вошли в аккаунт';
                // тут доделать
                header('Location: task_14.php');
                exit;
            }
        }
    }

    $_SESSION['message'] = 'Неправильный логин или пароль!';
    
}

header('Location: task_14.php');



