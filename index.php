<?php



// Définition de l'interface Reparable avec une méthode de reparer
interface Reparation {
    public function reparer();
}

class Voiture extends Vehicule implements Reparation {
    public $marque;
    public $modele;
    public $kilometrage;
    public $annee;
    public $typeVoiture;
    public $paysOrigine;

    // Constructeur
    public function __construct($marque, $modele, $kilometrage,$annee,$typeVoiture,$paysOrigine) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->typeVoiture = $typeVoiture;
        $this->paysOrigine = $paysOrigine;
    }

    public function afficherDetails() {
        echo "Marque: $this->marque, Modèle: $this->modele, Kilométrage: $this->kilometrage, Année: $this->annee ,Type de voiture: $this->typeVoiture ,Pays d'origine: $this->paysOrigine \n";
    }
    
    // Implémentation de la méthode reparer() de l'interface Reparable
    public function reparer() {
        echo "La voiture est en réparation.\n";
    }
    public function klaxonner() {
        echo "La voiture klaxonne.\n";
    }

    // Méthodes publiques pour accéder et modifier la propriété marque
    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($modele) {
        $this->marque = $modele;
    }
    public function getModele() {
        return $this->modele;
    }

    public function setModel($modele) {
        $this->marque = $modele;
    }
    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function setKilometrage($kilometrage) {
        $this->marque = $kilometrage;
    }
    public function getTypeVoiture() {
        return $this->typeVoiture;
    }

    public function setTypeVoiture($typeVoiture) {
        $this->typeVoiture = $typeVoiture;
    }
}
class Vehicule {
    public function demarrer() {
        echo "Le véhicule démarre.\n";
    }
}
class Moto extends Vehicule {
    // Ajoutez des propriétés et des méthodes spécifiques à la moto si nécessaire
}

// Instanciation d'un objet de la classe Voiture
$voiture = new Voiture("Toyota", "Corolla", 50000, 2018, "Berline", "Japon");

// Affichage des détails de la voiture
$voiture->afficherDetails();

// Appel de la méthode pour démarrer
$voiture->demarrer();

// Appel de la méthode reparer() de l'interface Reparable
$voiture->reparer();

?>
