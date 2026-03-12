<!-- De ECHTE Canvas -->
 
    <?php require "includes/header.php"; ?>
    <?php require "includes/db.php"; ?>

    <main>
        <h1><span id="greeting">Hoi</span>, welkom bij <?= $appNaam ?></h1>

        <?php
        $tabel1 = $conn->prepare("SELECT * FROM tabel1");
        $tabel1->execute();
        $doosje_met_tabel1 = $tabel1->fetchAll(PDO::FETCH_ASSOC);

        echo "<ul>";
        foreach ($doosje_met_tabel1 as $tabel1deel2){
        echo "<li>" . $tabel1['title'] . "</li>";
        }
        echo "</ul>";
        ?>
    </main>
    <?php require "includes/nav.php"; ?>
    <br><br>
    <?php require "includes/footer.php"; ?>