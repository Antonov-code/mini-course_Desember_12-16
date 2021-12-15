<?php
session_start();

include_once 'functions.php';


if (isset($_POST['password']) && isset($_POST['email'])){

    $result = get_user_by_email ($_POST['email']);

    if (!empty($result)){
        if (password_verify($_POST['password'], $result["password"])){
            login ($result['login'], $result['id']);
            set_user_massage ('вы успешно авторизовались');
            redirect_to ('../index.php');
        }
    }
    set_user_massage ('неверный логин или пароль');
}
redirect_to ('../login.php');
