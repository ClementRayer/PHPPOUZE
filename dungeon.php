<?php

session_start();
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/

require_once 'class/Game.php';
require_once 'class/Salle.php';

if ($_POST['etat'] == false) {

    $game = unserialize($_SESSION['game']);

} else {

    switch ($_POST['etat']) {

        case "personnage":

            $game = new Game();

            $inputname = $_POST['inputname'];
            $classe_joueur = $_POST['classe'];

            $game->newCharacter($classe_joueur, $inputname);

            $game->initNumber($number);
            $number = $game->getNumber();

            $_SESSION['game'] = serialize($game);
            break;

        case "next":

            $game = unserialize($_SESSION['game']);

            $game->nextNumber($number);
            $number = $game->getNumber();

            $_SESSION['game'] = serialize($game);
            break;
    }
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
<?php
$rand = rand(1, 10);
if ($rand <= 5){
?>
<section class="dungeon1">
    <?php
    }
    elseif ($rand <= 10 & $rand > 5){
    ?>
    <section class="dungeon2">
        <?php
        }
        ?>
        <h1>Vous entrez dans la salle n°<?php echo $number; ?></h1>
        <section class="img-hero">
            <h2 class="chara"><?php echo $game->getCharacter()->getInputName(); ?></h2>
            <img id="hero" src="<?php echo $game->getCharacter()->getInputImage(); ?>" alt="hero">
            <h3><?php echo $game->getCharacter()->getInputLife(); ?></h3>
        </section>
        <br>
        <form method="post" action="dungeon.php">
            <input type="hidden" name="etat" value="next">
            <input type="submit" value="Suivant">
        </form>
        <form method="post" action="stats.php">
            <input type="submit" value="Statistiques">
        </form>
        <?php
        if($number > 1){
        ?>
        <form method="post" action="dungeon.php">
            <input type="hidden" name="etat" value="fuir">
            <input type="submit" value="Fuir">
        </form>
        <?php
        }
        ?>
        <form method="post" action="index.php">
            <input type="hidden" name="etat" value="save">
            <input type="submit" value="Quitter">
        </form>
        <form method="post" action="index.php">
            <input type="hidden" name="etat" value="quitter">
            <input type="submit" value="Quitter la session">
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="./js/main.js"></script>
</body>
</html>