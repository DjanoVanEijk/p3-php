<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$games = $conn->prepare("SELECT * FROM games");
$games->execute();
$doosje_met_games = $games->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($doosje_met_games as $game){
  echo "<li>" . $game['title'] . " " . $game['release_year'] . "</li>";
}
echo "</ul>";
?>
