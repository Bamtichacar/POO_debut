<?php
class Nain extends Perso Implements Arme, Talent {
    // implementation de Arme
    public function epee($type) {}
    public function arc($type) {}
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