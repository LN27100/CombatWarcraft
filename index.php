<?php
require_once 'Hero.php';
$hero = new Hero (5000, 0, 'Link', 'Master Sword', 100, 'Bouclier Hylien', 50);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héros</title>
</head>
<body>
    
<p>Héros</p>

<?php
$hero ->getInfos();

// echo $hero->getName(); Le getter permet d'afficher les attributs privés
?>

</body>
</html>