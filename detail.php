<?php

$array = [
    0 =>["Bon", "Jean", "18 ans", "Paris", "Passions" => ["Jouer", "Sortir", "Boire"]],
    1 =>["Poireaux", "Arthur", "54 ans", "Mons", "Passions" => ["Dealer", "Fumer", "Manger"]],
    2 =>["Paul", "Ine", "12 ans", "Charleroi", "Passions" =>["Nager", "Ecole", "Amis"]],
    3 =>["Hanotiau", "Stefan", "28 ans", "Monceau-Imbrechies", "Passions" =>["Jeux", "Dormir", "PC"]],
    4 =>["Dumetz", "Laurie", "25 ans", "Monceau-Imbrechies", "Passions" => ["Jeux", "Dormir", "PC"]],
];

$key = intval($_GET['home']);

echo "<div id='list'>";

foreach ($array[$key] as $key =>$item) {
    if ($key === "Passions") {
        echo "<p>Passions : </p>";
        foreach ($item as $passions) {
            echo "<p>$passions</p>";
        }
    }
    else {
        echo "<p>$item</p>";
    }
}

echo "<a href='index.php' id='back'>Retour à la liste</a>";

echo "</div>";



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
