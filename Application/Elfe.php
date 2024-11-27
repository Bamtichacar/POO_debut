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
}