<?php

// Définition de la classe
class Voiture {
    // Déclaration des propriétés (attributs)
    public $propriete1;
    public $propriete2;
    public $propriete3;
    public $propriete4;
    
    // Déclaration du constructeur
    public function __construct($marque, $modele, $kilometrage, $annee) {
        $this->propriete1 = $marque;
        $this->propriete2 = $modele;
        $this->propriete3 = $kilometrage;
        $this->propriete4 = $annee;
    }
    
    // Méthode pour afficher les détails de la voiture
    public function afficherDetailsVoiture() {
        echo "Marque : " . $this-> propriete1. "<br>";
        echo "Modèle : " . $this->propriete2 . "<br>";
        echo "Kilomètrage : " . $this->propriete3. "<br>";
        echo "Année : " . $this->propriete4 . "<br>";
    }   
}
//L'instanciation d'un objet de la classe Voiture 
$maVoiture = new Voiture("Toyota", "Corolla", 50000, 2020);

// Appel de la méthode pour afficher les détails de la voiture
$maVoiture->afficherDetailsVoiture();

?>