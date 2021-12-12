<?php

$array = [
    [
        "title" => "My Tasks",
        "span" => "130/500",
        "color" => "gray",
        "progress" => "28%"
        // "value_now" => "28"
    ],
    [
        "title" => "Transfered",
        "span" => "440TB",
        "color" => "blue",
        "progress" => "33%",
        // "value_now" => "33"
    ],
    [
        "title" => "Bugs Squashed",
        "span" => "77%",
        "color" => "red",
        "progress" => "77%",
        // "value_now" => "77"
    ],
    [
        "title" => "User Testing",
        "span" => "7days",
        "color" => "darkmagenta",
        "progress" => "90%",
        // "value_now" => "90"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main">
        <div class="content">

            <?php
                foreach ($array as $value):?>
                    <div>
                        <span> <?=$value['title']?> | </span>
                        <span> <?=$value['span']?> </span>
                        <div class="progress">
                            <div class="progress_bar <?=$value['color']?>" style="width:<?=$value['progress']?>"></div>
                        </div>
                    </div>
            <?php endforeach; ?>

        </div>
        <ul>

        </ul>
    </main>
    
</body>
</html>


