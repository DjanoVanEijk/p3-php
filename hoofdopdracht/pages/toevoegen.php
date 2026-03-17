<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input name="vak" type="text" required>
    <input name="deadline" type="date" required>
    <button type="submit">Submit</button>
    </form>
<p>
  <?php
if (isset($_POST['vak'])) {
    echo htmlspecialchars($_POST['vak']);
}
?>
</p>

<p>
<?php
if (isset($_POST['deadline'])) {
    echo htmlspecialchars($_POST['deadline']);
}
?>
</p>
</body>
</html>