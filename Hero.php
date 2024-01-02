<!-- Exercice 4
Dans un nouveau fichier Hero.php, créer la classe Hero héritant de Character et ayant pour
attributs name, weaponName, weaponDamage,shieldName et shieldValue.
L'attribut name permettra de définir le nom du héro.
L'attribut weaponName permettra de définir le nom de l'arme équipée.
weaponDamage indiquera les dégâts basiques de l'arme.
shieldName définira le nom de l'armure équipée.
shieldValue indiquera le nombre de dégâts que l'armure encaisse à la place du héros.

Les attributs ne doivent être accessibles que dans cette classe !

 Exercice 5
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


class Hero extends Character
{ //permet d'hériter de la classe (exo4)
    private $name;
    private $weaponName;
    private $weaponDamage;
    private $shieldName;
    private $shieldValue;

    //    Getter et Setter (exo5)

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getWeaponName()
    {
        return $this->weaponName;
    }

    public function setWeaponName(string $weaponName)
    {
        $this->weaponName = $weaponName;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    public function setWeaponDamage(int $weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }

    public function getShieldName()
    {
        return $this->shieldName;
    }

    public function setShieldName(string $shieldName)
    {
        $this->shieldName = $shieldName;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setShieldValue(int $shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }

    //  Mise en place du constructeur (exo6)
    function __construct(int $health, int $rage, string $name, string $weaponName, int $weaponDamage, string $shieldName, int $shieldValue)
    {

        parent::__construct($health, $rage); //on appelle le constructeur de la classe parrente Character

        $this->setName($name);
        $this->setWeaponName($weaponName);
        $this->setWeaponDamage($weaponDamage);
        $this->setShieldName($shieldName);
        $this->setShieldValue($shieldValue);
    }

    // Méthode pour afficher les infos du héros

    public function getInfos()
    {
        echo 'Point de vie: ' . $this->getHealth() . '<br>';
        echo 'Point de rage: ' . $this->getRage() . '<br>';
        echo 'Nom: ' . $this->getName() . '<br>';
        echo 'Arme: ' . $this->getWeaponName() . '<br>';
        echo 'Dégâts de l\'arme: ' . $this->getWeaponDamage() . '<br>';
        echo 'Nom de l\'armure: ' . $this->getShieldName() . '<br>';
        echo 'Valeur du bouclier: ' . $this->getShieldValue() . '<br>';
    }
}
?>