<?php
class Elfe extends Perso Implements Arme, Talent {
    // implementation de Arme
    public function epee() {}
    public function arc() {
        $this->force = 100000;
    }
    public function masseDArme() {}
    public function baton() {}
    public function batonMagique() {}
    // implementation de Talent
    public function cavalier() {}
    public function magicien() {}
    public function guerrier() {}
    public function necromancien() {}
    public function voleur() {}
    public function assassin() {}

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
    public function getPV(int  $PV) {
        return $this -> PV;
    }




public function attaquer(){
    $this->arc();
    return $this->force;
}

public function attaquerbis($cible) {
    $cible -> PV -= $this -> force;
}


}