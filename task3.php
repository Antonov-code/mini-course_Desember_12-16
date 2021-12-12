<?php

$array = [
    [
        "title" => "Главная",
        "href" => "#",
        "link" => true
    ],
    [
        "title" => "PHP",
        "href" => "#",
        "link" => true
    ],
    [
        "title" => "Функции",
        "href" => "",
        "link" => false
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <main>
        <ul>

        <?php
            foreach ($array as $item):
                if ($item['link'] == true) {
                    ?><li><a href=" <?=$item['href']?> "> <?=$item['title']?> </a></li><?php
                } else {
                    ?><li> <?=$item['title']?> </li><?php
                }
            endforeach;?>

        </ul>
    </main>
    
</body>
</html>


