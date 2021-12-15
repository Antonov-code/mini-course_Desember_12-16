<?php
// require_once 'config.php';

function redirect_to ($path){
    header('location: ' . $path);
    exit;
}

function set_user_massage ($message){
    $_SESSION['message'] = $message;
}

function connect_db (){
    $pdo = new PDO("mysql:host=localhost;dbname=mini-course" , 'root', '');
    return $pdo;
}

function get_user_by_email ($email){
    $pdo = connect_db ();
    $sql = "SELECT * FROM `users` where `login` = :login";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['login' => $email]);
    $result = $statement -> fetch(PDO::FETCH_ASSOC);

    return $result;
}

function get_user_by_id ($id){
    $pdo = connect_db ();
    $sql = "SELECT * FROM `users` where `id` = :id";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['id' => $id]);
    $result = $statement -> fetch(PDO::FETCH_ASSOC);

    return $result;
}

function add_new_user ($email, $password){
    $password = password_hash($password, PASSWORD_DEFAULT);
    $pdo = connect_db ();

    $sql = "INSERT INTO `users` (`login`, `password`) VALUES (:login, :password); ";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['login' => $email ,'password' => $password]);
}

function login ($email, $id){
    $_SESSION['user']['id'] = $id;
    $_SESSION['user']['email'] = $email;
}

function logout (){
    session_destroy();
    // $_SESSION = [];
}

function get_messages ($limit){
    $pdo = connect_db ();

    $sql = "SELECT * FROM `messages` ORDER BY `id` DESC LIMIT $limit";
    $statement = $pdo -> prepare($sql);
    $statement -> execute();
    $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function agg_message ($user_id, $text){
    $pdo = connect_db ();
    $sql = "INSERT INTO `messages` (`user_id`, `text`) VALUES (:user_id, :text); ";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['user_id' => $user_id ,'text' => $text]);
}


