<?php

session_start();

if ($_POST['etat'] == "quitter") {
    session_destroy();
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Le plus sombre des Donjons</title>
</head>

<body>
<section class="start">
    <section class="text-place">
        <img class="flottement" src="./img/logo.png" alt="logo">
        <br><br>
        <a class="clignotement" href="enter.php">Start</a><br><br>
        <?php
            if ($_POST['etat'] == "save") {
                ?><a class="clignotement" href="dungeon.php">Reprendre</a><?php
            }
        ?>
    </section>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>