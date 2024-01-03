<?php
require_once 'Hero.php'; //récupérer une fois la page héros
require_once 'Orc.php'; 
require_once 'Character.php'; 

$hero = new Hero (1000, 0, 'Link', 'Master Sword', 250, 'Bouclier Hylien', 450); // créer un nouveau héros
$malefic = new Orc (2000, 0, 'Feu'); // créer un nouveau méchant

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

<!-- utiliser la méthode pour afficher les données de l'Orc -->

<h2>Orc</h2>

<?php
$malefic ->getInfos();
?>

<h3>COMBAT</h3>

<?php
function combat () {

}
?>

</body>
</html>