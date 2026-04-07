<?php require "../includes/db.php"; 
session_start();
?>

<?php
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $vak = trim($_POST['vak'] ?? '');
    $deadline = $_POST['deadline'] ?? '';


    if (empty($vak)) {
        $errors[] = "Vak is verplicht.";
    }


    if (strlen($vak) < 3) {
        $errors[] = "Vak moet minimaal 3 tekens bevatten.";
    }

    if (strlen($vak) > 50) {
        $errors[] = "Vak mag maximaal 50 tekens bevatten.";
    }

    if (empty($deadline)) {
        $errors[] = "Deadline is verplicht.";
    }

    if (empty($errors)) {
        $success = "Formulier succesvol verzonden!";
    }
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

<?php if (empty($errors)): ?>
    <div>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($success): ?>
    <p><?= $success; ?></p>
<?php endif; ?>

    <form method="POST">
    <label>Vak:</label>
    <input name="vak" type="text">
    <label>Deadline:</label>
    <input name="deadline" type="date">
    <button type="submit">Submit</button>
    </form>
<p>
  <?php
if (isset($_POST['vak'], $_POST['deadline'])) {
    $vak = $_POST['vak'];
    $deadline = $_POST['deadline'];
    $sql = "INSERT INTO huiswerk (vak, deadline) VALUES (:vak, :deadline)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['vak' => $vak, 'deadline' => $deadline]);
    $_SESSION['success'] = "Opslaan gelukt!";
    header("location: home.php");
    exit();
}
?>
</p>

<p>
<?php

?>
</p>
</body>
</html>