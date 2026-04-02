

<?php
$titel = "Test item";
$omschrijving = "Dit is een test.";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  
}

$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $conn->prepare($sql);

$stmt->execute([
    "titel" => $titel,
    "omschrijving" => $omschrijving
]);

echo "Insert gelukt";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>