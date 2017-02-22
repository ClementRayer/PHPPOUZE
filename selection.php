<?php

session_start();

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
        <h1 class="flottement">Choisis ton personnage :</h1>
            <br>
        <form action="#">
            <input type="text" placeholder="Ton nom, aventurier !" name="inputname">
            <input type="submit" value="Envoyer">
        </form>
    </section>

    <div class="hero inline-block">
        <img id="warrior" src="img/hero-warrior.png" alt="warrior">
        <p class="chara">Guerrier</p>
    </div>
    <div class="hero inline-block">
        <img id="wizard" src="img/hero-wizard.png" alt="wizard">
        <p class="chara">Magicien</p>
    </div>
    <div class="hero inline-block">
        <a href="#"><img id="paladin" src="img/hero-paladin.png" alt="paladin"></a>
        <p class="chara">Paladin</p>
    </div>
</body>
</html>