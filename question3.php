<?php
// Classe parente (classe de base)
class Vehicule {
    // Méthode de la classe parente
    public function demarrer() {
        echo "Le véhicule démarre.\n";
    }
}
// Classe enfant (classe dérivée)
class Voiture extends Vehicule {
    
}