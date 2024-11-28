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

    // fct pour avoir le nom de la classe
    public function getClassName() {
        return get_class($this);
    }

    // definition des fonctions get pour chaque variable
    public function getPV(int  $PV) {
        return $this -> PV;
    }
    
     // test getting general
    public function getgeneral($propriete) {
        return $this -> $propriete; 
    }
    public function getAll() {
        return [
            'class' => get_class($this),
            'name' => $this->name,
            'PV' => $this->PV,
            'force' => $this->force,
            'endurance' => $this->endurance,
            'enVie' => $this->enVie
        ];
    }
    public function afficheGetAll(){
        $valeurs = $this->getAll();
    foreach ($valeurs as $cle => $valeur) {
        echo "$cle: $valeur\n";
    }
    }
    



}