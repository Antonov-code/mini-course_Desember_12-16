<?php

session_start();



function upload_images($files){

    $images = [];

    for ($i = 0; $i < count($files['images']['name']); $i++){

        $extension = pathinfo( $files['images']['name'][$i] );
        $file_name = uniqid() . '.' . $extension['extension'];

        move_uploaded_file( $files['images']['tmp_name'][$i], 'uploaded_images/' . $file_name );
        $images[] = [
                        "image_name" => $file_name,
                        "path" => 'uploaded_images/' . $file_name
                    ];
        upload_images_to_db($images);
    }
}


function upload_images_to_db($images){
    $pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");

    foreach ($images as $image) {
        $sql = "INSERT INTO `images` (`image`) VALUES (:image);";
        $statement = $pdo -> prepare($sql);
        $statement -> execute(['image' => $image["path"]]);
    }
}



if (!empty($_FILES['images']['name'][0])){
    upload_images($_FILES);
}

header('Location: task_16.php');

