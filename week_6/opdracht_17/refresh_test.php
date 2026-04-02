<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  
}

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $sql = "INSERT INTO items (title) VALUES (:title)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => $title]);
    header("Refresh:0");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input name="title" type="text">
    <button type="submit">Submit</button>
    </form>
</body>
</html>