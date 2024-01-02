
<!-- Exercice 1
 
Créer un fichier Character.php, dans ce fichier créer une classe Character ayant pour attributs
health et rage.
Les attributs ne doivent être accessibles que dans cette classe ! (attributs en private) -->

<!-- Exercice 2
Créer les méthodes permettant d’accéder aux attributs de la classe Character et permettant
également de les définir.  -->

<!-- Exercice 3
Créer la méthode magique construct de la classe Character.
Celle-ci doit permettre la création d'un nouveau personnage et doit donc définir les valeurs de
health et de rage. -->

<!-- Exercice 4
Dans un nouveau fichier Hero.php, créer la classe Hero héritant de Character et ayant pour
attributs weapon, weaponDamage, shield et shieldValue.
L'attribut weapon permettra de définir le nom de l'arme équipée,
weaponDamage indiquera les dégâts basiques de l'arme,
shield définira le nom de l'armure équipée,
shieldValue indiquera le nombre de dégâts que l'armure encaisse à la place du héros.
Les attributs ne doivent être accessibles que dans cette classe !  -->

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
// EXERCICE 1

class Character
{
// Attributs
private $health ;
private $rage;

// EXERCICE 2

//Méthodes pour accéder aux attribus (obtenir la valeur de la vie et de la rage) [getter]
public function getHealth()
  {
    return $this->health;
  }
  
  public function getRage()
  {
    return $this->rage;
}

//Méthodes pour définir les attributs [setter]
//Typer les paramètres permet d'aider au débuggage ensuite [int; bool; string; etc]
public function setHealth(int $health)
{
    $this->health = $health;
}

public function setRage(int $rage)
{
    $this->rage = $rage;
}

// EXERCICE 3
//le constructor est la première fonction qui est lancée.
//utiliser les setters pour le constructor permet d'avoir le contrôle sur ls valeurs

public function __construct(int $health,int $rage)
{
    $this->setHealth($health) ;
    $this->setRage( $rage) ;
}
}
?>

