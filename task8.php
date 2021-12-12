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
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Twitter</th>
                </tr>

                <?php foreach ($people as $person):?>

                    <tr>
                        <td><?=$person['id']?></td>
                        <td><?=$person['name']?></td>
                        <td><?=$person['job_title']?></td>
                        <td><?=$person['twitter_link_text']?></td>

                        <td><a href="show.php?id=<?=$person['id']?>">Просмотреть</a></td>
                        <td><a href="show.php?id=<?=$person['id']?>">Изменить</a></td>
                        <td><a href="show.php?id=<?=$person['id']?>">Удалить</a></td>

                    </tr>

                <?php endforeach; ?>
    
            </table>
        </div>
        <ul>

        </ul>
    </main>
    
</body>
</html>


