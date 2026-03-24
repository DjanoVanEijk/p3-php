<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$aantal = 67;

if (is_numeric($aantal)) {
    echo "Correct ingevoerd.";
} else {
    echo "Voer een geldig getal in.";
}
?>
</body>
</html>