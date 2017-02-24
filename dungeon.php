<?php

session_start();

if (isset($_SESSION['game']))
    $game = unserialize($_SESSION['game']);
else
    $game = new Game();

    $inputname = $_POST['inputname'];
    $classe_joueur = $_POST['classe'];

    if ($classe_joueur == 0) {
        new Warrior($inputname);
    }

    if ($classe_joueur == 1) {
        new Wizard($inputname);
    }

    if ($classe_joueur == 2) {
        new Paladin($inputname);
    }

$_SESSION['game'] = serialize($game);

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
    </section>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>