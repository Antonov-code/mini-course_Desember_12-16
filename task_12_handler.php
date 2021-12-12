<?php

session_start();

if (isset($_POST['text_from_user'])){

    $_SESSION['message'] = $_POST['text_from_user'];

}

header('Location: task_12.php');
exit;



