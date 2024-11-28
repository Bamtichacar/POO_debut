<?php
class Arc implements Arme {
    private $force;

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

    public function getForce() {
        return $this->force;
    }
}

// Utilisation
    $arc = new Arc();
    $arc->arc('long');
    echo $arc->getForce(); // 150000
    
    $arc->arc('court');
    echo $arc->getForce(); // 80000

    
    //--------------------------------------------
