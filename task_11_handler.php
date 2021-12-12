<?php 

session_start();

if (isset($_POST['password']) && isset($_POST['email'])){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $login = $_POST['email'];

    $pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");
    $sql = "SELECT * FROM `users` where `login` = :login";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['login' => $login]);
    $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

    if (!empty($result)){

        $_SESSION['message'] = 'аккаунт с такой почтой уже есть';
        header('Location: task_11.php');

    } else {

        $sql = "INSERT INTO `users` (`login`, `password`) VALUES (:login, :password); ";
        $statement = $pdo -> prepare($sql);
        $statement -> execute(['login' => $login ,'password' => $password]);

        $_SESSION['message'] = 'вы успешно зарегистрировались!';

        header('Location: task_11.php');
    }

} else {
    header('Location: task_11.php');
}




