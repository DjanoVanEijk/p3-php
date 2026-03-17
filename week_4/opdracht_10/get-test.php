<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    <input name="title" type="text">
    <button type="submit">Submit</button>
    </form>
    <?php
    echo $_GET['title'];
?>
</body>
</html>