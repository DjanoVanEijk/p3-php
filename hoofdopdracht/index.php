<!-- De ECHTE Canvas -->
 
    <?php require "includes/header.php"; ?>
    <?php require "includes/db.php"; ?>

    <main>
        <div class="container">
        <h1><span id="greeting">Hoi</span>, welkom bij <?= $appNaam ?></h1>
        <p>Hier kun je al je huiswerk bijhouden en beheren.</p>
        <?php require "includes/nav.php"; ?>
    </main>
    <?php require "includes/footer.php"; ?>