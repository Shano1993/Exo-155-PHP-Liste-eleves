<?php

$array = [
    0 =>["Bon", "Jean", "18", "Paris", "passions" => ["Jouer", "Sortir", "Boire"]],
    1 =>["Poireaux", "Arthur", "54", "Mons", "passions" => ["Dealer", "Fumer", "Manger"]],
    2 =>["Paul", "Ine", "12", "Charleroi", "passions" =>["Nager", "Ecole", "Amis"]],
    3 =>["Hanotiau", "Stefan", "28", "Monceau-Imbrechies", "passions" =>["Jeux", "Dormir", "PC"]],
    4 =>["Dumetz", "Laurie", "25", "Monceau-Imbrechies", "passions", ["Jeux", "Dormir", "PC"]],
];

echo "<div id='container'>";

echo "<h1>Liste des élèves</h1>";

foreach ($array as $key => $item) {
    echo "<a href='detail.php?home=$key'>$item[0] $item[1]</a><br>";
}

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
