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
    <link rel="stylesheet" href="style.css">
    <title>Héros</title>
</head>

<body>


    <div class="card-container">
        <div class="cards-wrapper">
            <h1>COMBATTONS !!</h1>

            <div class="cardHeros">
                <h3>Héros</h3>
                <div class="card-content">
                    <?php
                    // Affichage des données du héros
                    $hero->getInfos();
                    ?>
                </div>
            </div>

            <div class="cardMechant">
                <h3>Méchant</h3>
                <div class="card-content">
                    <?php
                    // Affichage des données de l'Orc
                    $malefic->getInfos();
                    ?>
                </div>
            </div>

    <!-- Relancer un nouveau combat -->
            <form method="post" action="">
                <input type="submit" name="replay" value="Rejouer">
            </form>

            <?php
            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['replay'])) {
                echo '<script>window.location.href = window.location.href;</script>';
            }
            ?>
            
        </div>

        <div class="combat-container">
            <?php
            // Boucle de combat tant que le héros et l'Orc sont en vie
            while ($hero->getHealth() > 0 && $malefic->getHealth() > 0) {
                // TOUR DU HEROS
                echo '<div class="combat-turn">';
                echo '<div class="card hero-card">';
                // Obtenir les dégâts de l'arme du héros
                $heroAttack = $hero->getWeaponDamage();

                // Afficher l'attaque du héros avec une classe CSS
                echo '<p class="hero-attack">' . $hero->getName() . " attaque de $heroAttack.</p>";

                // Réduire la santé de l'Orc en fonction des dégâts infligés par le héros
                $malefic->setHealth($malefic->getHealth() - $heroAttack);

                // Afficher les dégâts infligés à l'Orc et sa santé restante
                echo '<p class="damage-info">Orc reçoit ' . $heroAttack . ' de dégâts : Il lui reste ' . ($malefic->getHealth()) . ' pts de vie.</p>';
                echo '</div>';
                echo '</div>';

                // Vérifier si l'Orc est mort après l'attaque du héros
                if ($malefic->getHealth() <= 0) {
                    echo '<p class="victory">' . 'L\'Orc meurt, ' . $hero->getName() . ' a gagné.</p>';
                    // Sortir de la boucle, le combat est terminé
                    break;
                }

                // TOUR DE L'ORC
                echo '<div class="combat-turn">';
                echo '<div class="card malefic-card">';
                // L'Orc attaque le héros
                $malefic->attacked();

                // Réduire la santé du héros en fonction des dégâts infligés par l'Orc
                $hero->beAttacked($malefic->getDamage());

                // Afficher l'attaque de l'Orc et les dégâts subis par le héros
                echo '<p class="orc-attack">Orc attaque de ' . $malefic->getDamage() . '.</p>';
                echo '<p class="damage-infos">' . $hero->getName() . ' reçoit ' . $malefic->getDamage() . ' de dégâts : Il lui reste ' . max(0, $hero->getHealth()) . ' pts de vie.</p>';
                echo '</div>';
                echo '</div>';

                // Vérifier si le héros est mort après l'attaque de l'Orc
                if ($hero->getHealth() <= 0) {
                    echo '<p class="defeat">' . $hero->getName() . ' meurt, l\'Orc a gagné.</p>';
                    // Sortir de la boucle, le combat est terminé
                    break;
                }
            }
            ?>


        </div>

    </div>


</body>

</html>