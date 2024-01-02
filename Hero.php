<!-- Exercice 4
Dans un nouveau fichier Hero.php, créer la classe Hero héritant de Character et ayant pour
attributs weapon, weaponDamage, shield et shieldValue.
L'attribut weapon permettra de définir le nom de l'arme équipée,
weaponDamage indiquera les dégâts basiques de l'arme,
shield définira le nom de l'armure équipée,
shieldValue indiquera le nombre de dégâts que l'armure encaisse à la place du héros.
Les attributs ne doivent être accessibles que dans cette classe !  -->

<!-- Exercice 5
Créer les méthodes permettant d’accéder aux attributs de la classe Hero et permettant également
de les définir.

Exercice 6
Créer la méthode magique construct de la classe Hero.
Cette méthode devra permettre le déclenchement de la méthode construct de la classe mère
(Character) et devra également permettre de défnir les valeurs de name, weaponName, weaponDamage,
shieldName et shieldValue.
Pour finir, cette méthode doit retourner une phrase contenant toutes les informations sur le Héros
nouvellement créé.  -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

require_once 'Character.php'; //récupérer la classe Charater dans la page character.php

class Hero extends Character { // permets d'hériter de la classe
private $weapon;
private $weaponDamage;
private $shield;
private $shieldValue;
}