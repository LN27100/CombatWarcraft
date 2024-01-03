<?php
require_once 'Hero.php'; //récupérer une fois la page héros
require_once 'Orc.php'; 

$hero = new Hero (5000, 0, 'Link', 'Master Sword', 100, 'Bouclier Hylien', 50); // créer un nouveau héros
$malefic = new Orc (5000, 0, 'Orc', 300); // créer un nouveau méchant

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héros</title>
</head>
<body>
    
<h1>Héros</h1>

<!-- utiliser la méthode pour afficher les données du héros -->
<?php
$hero ->getInfos();


// echo $hero->getName(); Le getter permet d'afficher les attributs privés
?>

<h2>Méchant</h2>

<?php
$malefic ->getInfos();
?>
</body>
</html>