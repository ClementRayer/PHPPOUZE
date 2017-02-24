<?php

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'class/game.php';

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
    $rand = rand(1, 2);
    if ($rand == 1){
?>
<section class="dungeon1">
    <?php
    }
    else{
    ?>
<section class="dungeon2">
    <?php
    }
    ?>
    <section class="text-place">
        <?php
            echo ;
        ?>
    </section>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>