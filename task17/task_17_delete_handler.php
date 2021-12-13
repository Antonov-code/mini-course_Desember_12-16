<?php

if (isset($_GET['image_id'])){

    $pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");

    $sql = " DELETE FROM `images` WHERE `images`.`id` = :id ";
    $statement = $pdo -> prepare($sql);
    $statement -> execute(['id' => $_GET['image_id']]);
}

header('Location: task_17.php');

