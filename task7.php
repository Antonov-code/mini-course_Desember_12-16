<?php


$pdo = new PDO("mysql:host=localhost;dbname=mini-course", "root", "");
$sql = "SELECT * FROM people";
$statement = $pdo -> prepare($sql);
$statement -> execute();
$people = $statement -> fetchAll(PDO::FETCH_ASSOC);



// $mysqli = new mysqli ("localhost", "root", "", "mini-course");
// $people = mysqli_query($mysqli, " SELECT * FROM `people` ");
// $people = mysqli_fetch_all($people);

// // print_r($people);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main class="main">
        <div class="content">
            <div class="flex">

            <?php
                foreach ($people as $person):?>

                    <div class="person <?php echo $person['status'] == 'banned'? 'banned' : '' ;?>">
                        
                        <img src="<?=$person['image']?>" alt="<?=$person['image_alt']?>" class="photo">

                        <div>
                            <h2 class="person_name"><?=$person['name']?></h2>
                            <span class="job_title"><?=$person['job_title']?></span>
                            <div class="contacts">
                                <span><a href="<?=$person['twitter_link_href']?>"><?=$person['twitter_link_text']?></a></span>
                                <span><a href="<?=$person['email_link_text']?>"><?=$person['email_link_title']?></a></span>
                            </div>
                        </div>
                        
                    </div>
            <?php endforeach; ?>

            </div>
        </div>
        <ul>

        </ul>
    </main>
    
</body>
</html>


