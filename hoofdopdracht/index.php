<!-- De ECHTE Canvas -->
 
    <?php require "includes/header.php"; ?>
    <?php require "includes/db.php"; ?>

    <main>
        <h1><span id="greeting">Hoi</span>, welkom bij <?= $appNaam ?></h1>

        <?php
        $huiswerk = $conn->prepare("SELECT * FROM huiswerk");
        $huiswerk->execute();
        $doosje_met_huiswerk = $huiswerk->fetchAll(PDO::FETCH_ASSOC);

        echo "<ul>";
        foreach ($doosje_met_huiswerk as $huiswerkdeel){
        echo "<li>" . $huiswerkdeel['vak'] . "</li>";
        }
        echo "</ul>";
        ?>
    </main>
    <?php require "includes/nav.php"; ?>
    <br><br>
    <?php require "includes/footer.php"; ?>