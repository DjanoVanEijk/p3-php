<?php

$games = [
[
"titel" => "Super Mario Bros",
"genre" => "Platformer",
"maker" => "Nintendo"
],
[
"titel" => "Fortnite",
"genre" => "Shooter",
"maker" => "Epic Games"
]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>
 <?= $games[0]["titel"]; ?> <br>
 <?= $games[1]["titel"]; ?>
</h1>
</body>
</html>