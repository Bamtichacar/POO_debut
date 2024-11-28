<?php
class Elfe extends Perso Implements Arme, Talent {
    
    // implementation de Arme
    public function epee($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    public function arc($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    public function masseDArme($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    public function baton($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    public function batonMagique($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    // implementation de Talent
    public function cavalier($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    public function magicien($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }
    public function guerrier($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }
    public function necromancien($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }
    public function voleur($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }
    public function assassin($type) {
        switch ($type) {
            case 'niveau_1':
                $this->force = 150000;
                break;
            case 'niveau_2':
                $this->force = 200000;
                break;
                case 'niveau_3':
                    $this->force = 300000;
                    break;
            default:
                $this->force = 100000; // Valeur par défaut
        }
    }

    public function getForce() {
        return $this->force;
    }


public function __construct($nom) {
    $this->name = $nom;
    $this->uniteRace = 70;
    $this->PV = 100;
    $this->force = 40;
    $this->endurance = 60;
    $this->enVie = true;
    $this->pointsestenVie();
}
private function pointsestenVie() {
    $pointsDeVie;
    if ($this->enVie) {
        return $this -> pointsDeVie = 50;
    } else {
        return $this-> pointsDeVie = 0;
    }
}

// determination des unités
public function UnitesArmee(){
    $unites = $this -> uniteRace + $this ->force + $this -> endurance + $this -> PV + $this -> pointsDeVie;
}


// definition des fonctions set pour chaque variable
    public function setNom(string  $nom) {
        $this -> nom = $nom;
    }
    public function setUniteRace(int  $uniteRace) {
        $this -> uniteRace = $uniteRace;
    }
    public function setPV(int  $PV) {
        $this -> PV = $PV;
    }
    public function setForce(int  $force) {
        $this -> force = $force;
    }
    public function setEndurance(int  $endurance) {
        $this -> endurance = $endurance;
    }
    public function setEnVie(bool  $enVie) {
        $this->enVie = $enVie;
        $this->pointsestenVie(); // Met à jour les points de vie
    }


// fct pour avoir le nom de la classe
public function getClassName() {
    return get_class($this);
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
public function getAll() {
    return [
        'class' => get_class($this),
        'name' => $this->name,
        'uniteRace' => $this->uniteRace,
        'PV' => $this->PV,
        'force' => $this->force,
        'endurance' => $this->endurance,
        'enVie' => $this->enVie,
        'pointsDeVie' => $this->pointsDeVie,
    ];
}
public function afficheGetAll(){
    $valeurs = $this->getAll();
    foreach ($valeurs as $cle => $valeur) {
        echo "$cle: $valeur\n";
    }
}


public function attaquer(){
    $this->arc('niveau_1');
    return $this->force;
}
// fonction attaquer ave action sur la cible
public function attaquerbis($cible) {
    $cible -> PV -= $this -> force;
}

// fonction attaquer avec action sur la cible et utilisation arme
public function attaquerEnnemiAvecArme($cible, $arme, $type='null') {
    $this -> $arme($type);
    $this -> force;
    $cible -> PV -= $this -> force;
}

}