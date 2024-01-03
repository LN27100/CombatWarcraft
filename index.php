<?php
require_once 'Hero.php'; //récupérer une fois la page héros
require_once 'Orc.php';
require_once 'Character.php';

// Créer une instance de Hero (héros) avec des valeurs initiales
$hero = new Hero(1000, 0, 'Link', 'Master Sword', 400, 'Bouclier Hylien', 450);
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
        
        // TOUR DU HEROS

        // Obtenir les dégâts de l'arme du héros
        $heroAttack = $hero->getWeaponDamage();

        // Afficher l'attaque du héros
        echo $hero->getName() . " attaque de $heroAttack.<br>";

        // Réduire la santé de l'Orc en fonction des dégâts infligés par le héros
        $malefic->setHealth($malefic->getHealth() - $heroAttack);

        // Afficher les dégâts infligés à l'Orc et sa santé restante
        echo 'Orc reçoit ' . $heroAttack . ' de dégâts : Il lui reste ' . ($malefic->getHealth()) . ' pts de vie.<br>';

        // Vérifier si l'Orc est mort après l'attaque du héros
        if ($malefic->getHealth() <= 0) {
            echo 'L\'Orc meurt, ' . $hero->getName() . ' a gagné.<br>';
            // Sortir de la boucle, le combat est terminé
            break;
        }

        // TOUR DE L'ORC

        // L'Orc attaque le héros
        $malefic->attacked();

        // Réduire la santé du héros en fonction des dégâts infligés par l'Orc
        $hero->beAttacked($malefic->getDamage());

        // Afficher l'attaque de l'Orc et les dégâts subis par le héros
        echo 'Orc attaque de ' . $malefic->getDamage() . '.<br>';
        echo $hero->getName() . ' reçoit ' . $malefic->getDamage() . ' de dégâts : Il lui reste ' . max(0, $hero->getHealth()) . ' pts de vie.<br>';

        // Vérifier si le héros est mort après l'attaque de l'Orc
        if ($hero->getHealth() <= 0) {
            echo $hero->getName() . ' meurt, l\'Orc a gagné.<br>';
            // Sortir de la boucle, le combat est terminé
            break;
        }
    }
    ?>

    <!-- 
    AFFICHAGE DES HEROS
$hero ->getInfos();

//  utiliser la méthode pour afficher les données de l'Orc
$malefic ->getInfos(); -->

</body>

</html>