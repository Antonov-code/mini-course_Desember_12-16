<?php

$array = [
    [
    "header" => "Privacy",
    "paragraph" => "Some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text"
    ],
    [
    "header" =>"Cookies and other similar technologies",
    "paragraph" => "Some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text, some text"
    ]
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

    <?php
        foreach ($array as $item):?>
            <div>
                <h2> <?=$item['header']?> </h2>
                <p> <?=$item['paragraph']?> </p>
            </div>
        <?php endforeach;?>

    </main>
    
</body>
</html>


