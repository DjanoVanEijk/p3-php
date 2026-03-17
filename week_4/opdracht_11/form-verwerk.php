<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <input name="naam" type="text" required>
    <input name="aantal" type="number" required>
    <button type="submit">Submit</button>
    </form>
<p>
    <?php
if (isset($_POST['naam'])) {
    echo htmlspecialchars($_POST['naam']);
}
?>
<p>
<p>
    <?php
if (isset($_POST['aantal'])) {
    echo htmlspecialchars($_POST['aantal']);
}
?>
<p>
</html>