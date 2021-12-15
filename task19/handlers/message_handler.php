<?php
session_start ();

include_once 'functions.php';

if (!isset($_SESSION['user']['id'])){
    redirect_to ('../reg.php');
}

if (isset($_POST['message'])){
    $user_id = $_SESSION['user']['id'];
    $text = $_POST['message'];
    agg_message ($user_id, $text);
}
redirect_to ('../index.php');

