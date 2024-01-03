<?php
require_once 'Hero.php'; //récupérer une fois la page héros
require_once 'Orc.php';
require_once 'Character.php';

// Créer une instance de Hero (héros) avec des valeurs initiales
$hero = new Hero(1000, 0, 'Link', 'Master Sword', 250, 'Bouclier Hylien', 450);
// Créer une instance de Orc (méchant) avec des valeurs initiales
$malefic = new Orc(2000, 0, 'Feu'); // créer un nouveau méchant

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
    // Boucle de combat tant que le héros et l'Orc sont en vie
    while ($hero->getHealth() > 0 && $malefic->getHealth() > 0) {
        // Tour du héros
        $heroAttack = $hero->getWeaponDamage();
        $malefic->beAttacked($heroAttack);
        echo $hero->getName() . " attaque de $heroAttack.<br>";
        echo 'Orc reçoit ' . $heroAttack . ' de dégâts : Il lui reste ' . max(0, $malefic->getHealth()) . ' pts de vie.<br>';

        // Vérifier si l'Orc est mort après l'attaque du héros
        if ($malefic->getHealth() <= 0) {
            echo 'L\'Orc meurt, ' . $hero->getName() . ' a gagné.<br>';
            break;
        }

        // Tour de l'Orc
        $malefic->attacked();
        $hero->beAttacked($malefic->getDamage());
        echo 'Orc attaque de ' . $malefic->getDamage() . '.<br>';
        echo $hero->getName() . ' reçoit ' . $malefic->getDamage() . ' de dégâts : Il lui reste ' . max(0, $hero->getHealth()) . ' pts de vie.<br>';
    
        // Vérifier si le héros est mort après l'attaque de l'Orc
        if ($hero->getHealth() <= 0) {
            echo $hero->getName() . ' meurt, l\'Orc a gagné.<br>';
            break;
        }
    }
    ?>



    <!-- AFFICHAGE DES HEROS -->
    <!-- utiliser la méthode pour afficher les données du héros

$hero ->getInfos();

//  utiliser la méthode pour afficher les données de l'Orc
$malefic ->getInfos(); -->

</body>

</html>