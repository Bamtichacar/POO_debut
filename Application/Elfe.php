<?php
class Elfe extends Perso Implements Arme, Talent {
    
    // implementation de Arme
    public function epee($type) {}
    public function arc($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 80000;
                break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }
    public function masseDArme($type) {}
    public function baton($type) {}
    public function batonMagique($type) {}
    // implementation de Talent
    public function cavalier($type) {}
    public function magicien($type) {}
    public function guerrier($type) {}
    public function necromancien($type) {}
    public function voleur($type) {}
    public function assassin($type) {}

    public function getForce() {
        return $this->force;
    }


public function __construct($nom) {
    $this->name = $nom;
    $this->PV = 100;
    $this->force = 40;
    $this->endurance = 60;
    $this->enVie = true;
}
    // definition des fonctions set pour chaque variable
    public function setPV(int  $PV) {
        $this -> PV = $PV;
        
    }


    // definition des fonctions get pour chaque variable
    public function getPV() {
        return $this -> PV;
    }


    // test getting general
/*     public function getgeneral($propriete) {
        $valeurPropriete = substr($propriete,1);
        return $this -> $valeurPropriete; 
    }
 */
public function getgeneral($propriete) {
    return $this -> $propriete; 
}



public function attaquer(){
    $this->arc('niveau_1');
    return $this->force;
}

public function attaquerbis($cible) {
    $cible -> PV -= $this -> force;
}


}