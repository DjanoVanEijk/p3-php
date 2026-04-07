<?php
session_start();
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}

$huiswerk = [
[
"vak" => "Engels",
"punten" => "5 punten",
],
[
"vak" => "Rekenen",
"punten" => "3 punten",
]
];

?>


 <h1>
 <?= $huiswerk[0]["vak"]; ?> <?= $huiswerk[0]["punten"]; ?><br>
 <?= $huiswerk[1]["vak"]; ?> <?= $huiswerk[1]["punten"]; ?><br>


