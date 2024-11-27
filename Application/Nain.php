<?php
class Nain extends Perso Implements Arme, Talent {
    // implementation de Arme
    public function epee() {}
    public function arc() {}
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

    public function __construct($toto) {
        $this->name = $toto;
        $this->PV = 100;
        $this->force = 60;
        $this->endurance = 70;
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
    
    
}