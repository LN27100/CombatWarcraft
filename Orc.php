<!-- Exercice 8
Dans un nouveau fichier Orc.php, créer la classe Orc héritant de Character et ayant pour attributs :
Type : Le type de l'Orc.
Damage : Les dégâts de l'Orc.

Ces attributs ne doivent être accessible que dans cette classe !

Exercice 9
Créer les méthodes permettant d’accéder aux attributs de la classe Orc et permettant également de les définir.

Exercice 10
Créer la méthode magique construct de la classe Orc.
Cette méthode devra permettre le déclenchement de la méthode construct de la classe mère (Character).
Elle doit retourner une phrase contenant toutes les informations sur l'Orc nouvellement créé.

Exercice 11
Créer une méthode attack permettant d’initialiser la valeur de damage avec un nombre aléatoire compris entre 600 et 800.  -->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
    require_once 'Character.php'; 

class Orc extends Character { 
    private $type;
    private $damage;

    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage(string $damage)
    {
        $this->damage = $damage;
    }

    //  Mise en place du constructeur
    function __construct(int $health, int $rage, string $type, int $damage)
    {

        parent::__construct($health, $rage); //on appelle le constructeur de la classe parente Character

        $this->setType($type);
        $this->setDamage($damage);
       
    }

    // Méthode pour afficher les infos de l'Orc

    public function getInfos()
    {
        echo 'Type: ' . $this->getType() . '<br>';
        echo 'Dégâts infligés: ' . $this->getDamage() . '<br>';
        
    }

    // // Méthode pour  attaquer
    
    // public function attacked($damage)
    // {
      
    // }
}

?>