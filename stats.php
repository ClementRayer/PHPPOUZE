<?php

session_start();

require_once 'class/Game.php';
require_once 'class/Salle.php';

$game = unserialize($_SESSION['game']);

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
        <h1 class="flottement">Statistiques :</h1>
            Nom : <?php echo $game->getCharacter()->getInputName(); ?><br>
            Vie : <?php echo $game->getCharacter()->getInputLife(); ?>/100<br>
            Attaque : <?php echo $game->getCharacter()->getInputAtk(); ?><br>
            Defense : <?php echo $game->getCharacter()->getInputDef(); ?><br>
            Magie : <?php echo $game->getCharacter()->getInputMag(); ?><br>
        <section class="img-hero">
            <img id="hero" src="<?php echo $game->getCharacter()->getInputImage(); ?>" alt="hero"><br>
        </section>
        <a href="dungeon.php">Retour au jeu</a>
    </section>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>