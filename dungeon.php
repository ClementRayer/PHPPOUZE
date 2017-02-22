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
        echo $rand;
        if($rand == 1){
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

</body>
</html>