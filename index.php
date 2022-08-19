<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
    <h1>Je fais des Regex</h1>
    <?php

        $masque = '/m/i'; //  La lettre i rend le masque inssensible a la casse
        $chaine = "DaMso Vie";
        if (preg_match($masque, $chaine) ) {
            echo 'Y\'a au moins une occurence';
            echo '<p> Le nombre d\'occurence est de' . preg_match_all($masque, $chaine) . '</p>'; 
        } else
            echo 'Pas vu pas pris';

    ?>
</body>
</html>