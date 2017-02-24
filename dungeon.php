<?php

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'class/Game.php';

if ($_POST['etat'] == "personnage") {

    $game = new Game();

    $inputname = $_POST['inputname'];
    $classe_joueur = $_POST['classe'];

    $game->newCharacter($classe_joueur, $inputname);

    $_SESSION['game'] = serialize($game);
}

elseif (isset($_SESSION['game'])){
    $game = unserialize($_SESSION['game']);
}

else{
    header('Location:index.php');
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
        <h1>Vous entrez dans la salle n°<?php ?>></h1>
        <section class="img-hero">
            <h2 class="chara"><?php echo $game->getCharacter()->getInputName();?></h2>
            <img id="hero" src="<?php echo $game->getCharacter()->getInputImage(); ?>" alt="hero">
            <h3><?php echo $game->getCharacter()->getInputLife();?></h3>
        </section>
    </section>

    <form method="post" action="index.php">
        <input type="hidden" name="etat" value="quitter">
        <input type="submit" value="Quitter la session">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>