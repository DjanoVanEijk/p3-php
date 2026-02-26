<!-- De ECHTE Canvas -->

<?php
$appNaam = "Kanvas";
$trackerType = "Huiswerk";
$Jaar = "Doe je huiswerk of ga good";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2><?= $appNaam ?></h2>
    </header>

    <main>
        <h1><span id="greeting">Hoi</span>, welkom bij <?= $appNaam ?></h1>
    </main>

    <footer>
        <?= $appNaam ?> <?php echo date("Y");?>
    </footer>
</body>
</html>
<script src="app.js"></script>