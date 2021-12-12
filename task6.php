<?php

$array = [
    [
        "image" => "img/default.jpg",
        "image_alt" => "Sunny A.",
        "name" => "Sunny A. (UI/UX Expert)",
        "job_title" => "Lead Author",
        "twitter_link_href" => "https://twitter.com/@myplaneticket",
        "twitter_link_text" => "@myplaneticket",
        "email_link_title" => "Mail",
        "email_link_text" => "",
        "status" => "active"
    ],
    [
        "image" => "img/default.jpg",
        "image_alt" => "Jos K.",
        "name" => "Jos K. (ASP.NET Developer)",
        "job_title" => "Partner & Contributor",
        "twitter_link_href" => "https://twitter.com/@atlantez",
        "twitter_link_text" => "@atlantez",
        "email_link_title" => "Mail",
        "email_link_text" => "",
        "status" => "banned"
    ],
    [
        "image" => "img/default.jpg",
        "image_alt" => "Jovanni L.",
        "name" => "Jovanni L. (PHP Developer)",
        "job_title" => "Partner & Contributor",
        "twitter_link_href" => "https://twitter.com/@lodev09",
        "twitter_link_text" => "@lodev09",
        "email_link_title" => "Mail",
        "email_link_text" => "",
        "status" => "active"
    ],
    [
        "image" => "img/default.jpg",
        "image_alt" => "Roberto R.",
        "name" => "Roberto R. (Rails Developer)",
        "job_title" => "Partner & Contributor",
        "twitter_link_href" => "https://twitter.com/@sildur",
        "twitter_link_text" => "@sildur",
        "email_link_title" => "Mail",
        "email_link_text" => "",
        "status" => "active"
    ]
];

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
                foreach ($array as $person):?>

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


