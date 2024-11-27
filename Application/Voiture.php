<?php
class Voiture extends Vehicule {

        protected string $marque;
        protected string $modele;
        protected int $kilometrage;
        protected int $vitesseMax;
        protected int $cylindre;
    
        public function __construct($marque,$modele, $kilometrage, $vitesseMax, $cylindre) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->kilometrage = $kilometrage;
            $this->vitesseMax = $vitesseMax;
            $this->cylindre = $cylindre;
        }
    // definition des fonctions set pour chaque variable
        public function setMarque(string  $marque) {
            $this -> marque = $marque;
        }
        public function setModele(string $modele) {
            $this -> modele = $modele;
        }
        public function setKilometrage(int $kilometrage) {
            $this -> kililometrage = $kilometrage;
        }
        public function setVitesseMax(int $vitesseMax) {
            $this -> vitesseMax = $vitesseMax;
        }
        public function setCylindre(int $cylindre) {
            $this -> cylindre = $cylindre;
        }

        // definition des fonctions get pour chaque variable
        public function getMarque(string  $marque) {
            return $this -> marque;
        }
        public function getModele(string $modele) {
            return $this -> modele;
        }
        public function getKilometrage(int $kilometrage) {
            return $this -> kililometrage;
        }
        public function getVitesseMax(int $vitesseMax) {
            return $this -> vitesseMax;
        }
        public function getCylindre(int $cylindre) {
            return $this -> cylindre;
        }

        // definition des autres fonctions

        public function deplace() {
            echo "Je vole";
        }
        public function accelere() {
            echo "Je passe la manette des gaz à fond";
        }
        public function freine() {
            echo "J'inverse la poussée";
        }
        public function bruit() {
            echo "Grondement de réacteur";
        }          
}