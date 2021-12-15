<?php
session_start();
include_once 'functions.php';

if (isset($_POST['password']) && isset($_POST['email'])){

    $result = get_user_by_email ($_POST['email']);

    if (empty($result)){
        add_new_user ($_POST['email'], $_POST['password']);
        set_user_massage ('вы успешно зарегистрировались');
        redirect_to ('../login.php');
    }
    set_user_massage ('пользователь с таким email уже существует');
}
redirect_to ('../reg.php');
