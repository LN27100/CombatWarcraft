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
    
<h1>COMBAT</h1>

<?php


?>


<!-- AFFICHAGE DES HEROS -->
<!-- utiliser la méthode pour afficher les données du héros

$hero ->getInfos();

//  utiliser la méthode pour afficher les données de l'Orc
$malefic ->getInfos();







<?php
function combat () {

}
?>

</body>
</html>