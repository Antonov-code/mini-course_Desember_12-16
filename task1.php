<?php

$array = [
    [
    "title" => "Reports",
    "tags" => "reports file asd"
    ],
    [
    "title" => "Analitics",
    "tags" => "analitics graphs"
    ],
    [
    "title" => "Export",
    "tags" => "export download"
    ],
    [
    "title" => "Storage",
    "tags" => "storage"
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
    <ul>

    <?php
        foreach ($array as $item):?>
            <li class="list-group-item">
                <span data-filter-tags="<?=$item['tags']?>">
                    <?=$item['title']?>
                </span>
            </li>
            <?php endforeach;?>

    </ul>
    
</body>
</html>


