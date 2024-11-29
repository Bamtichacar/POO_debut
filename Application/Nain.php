<?php
class Nain extends Perso Implements Arme, Talent {
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

/*     public function getForce() {
        return $this->force;
    }
 */

public function __construct($toto) {
    $this->name = $toto;
    $this->unitesDeRace = 70;
    $this->PV = 100;
    $this->force = 60;
    $this->endurance = 70;
    $this->enVie = true;
    $this->unitesDeEnVie = 50;
    $this->unitesDeTalent = 0;
    $this->unitesDeArme = 0;
    //$this->unitesDeRatelier = 0;
    $this->unitesTotalesDuPerso = $this -> unitesDeRace + $this ->force + $this -> endurance + $this -> PV + $this -> unitesDeEnVie;
}
public function pointsestenVie() {
    if ($this->enVie) {
        return $this -> unitesDeEnVie = 50;
    } else {
        return $this-> unitesDeEnVie = 0;
    }
}

// determination des unités de l'armee


public function UnitesArmee(){
}

// definition des fonctions set pour chaque variable
    public function setNom(string  $nom) {
        $this -> name = $nom;
    }
    public function setunitesDeRace(int  $unitesDeRace) {
        $this -> unitesDeRace = $unitesDeRace;
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
    public function setUnites(int  $unitesTotalesDuPerso) {
        $this -> unitesTotalesDuPerso = $unitesTotalesDuPerso;
    }


    // fct pour avoir le nom de la classe
    public function getClassName() {
        return get_class($this);
    }

    // definition des fonctions get pour chaque variable
    public function getNom() {
        return $this -> name;
    }
    public function getunitesDeRace() {
        return $this -> unitesDeRace;
    }
    public function getPV() {
        return $this -> PV;
    }
    public function getForce() {
        return $this -> force;
    }
    public function getEndurance() {
        return $this -> endurance;
    }
    public function getEnVie() {
        return $this -> enVie;
    }
    public function getUnitesTotalesDuPerso() {
        return $this -> unitesTotalesDuPerso;
    }
/*     public function getUnites(int  $unites) {
        return $this -> unites;
    }
 */



// ATTENTION IL NE FAUT PAS FAIRE DE GETGENERAL CAR IL NE FAUT PAS QUE LES GENS PUISSENT DEMANDER TELLE OU TELLE CHOSE COMME ILS VEULENT, L INTERET EST DE POUVOIR DETERMINER CE QUE L ON VEUT QUE LES GENS PUISSENT AFFICHER.        DU COUP IL FAUT FAIRE LES GET POUR CHAQUE PROPRIETE

    // test getting general - ne fonctionne pas
/*     public function getgeneral($propriete) {
        $valeurPropriete = substr($propriete,1);
        return $this -> $valeurPropriete; 
    }
 */
// NE PAS FAIRE CETTE FONCTION - IL NE FAUT PAS QUE L ON PUISSE ACCEDER A CES DONNEES, MAIS ELLE FONCTIONNE
public function getgeneral($propriete) {
    return $this -> $propriete; 
}
public function getAll() {
    return [
        'class' => get_class($this),
        'name' => $this->name,
        'unitesDeRace' => $this->unitesDeRace,
        'PV' => $this->PV,
        'force' => $this->force,
        'endurance' => $this->endurance,
        'enVie' => $this->enVie,
        'pointsDeVie' => $this->unitesDeEnVie,
        'unitesTotalesDuPerso' => $this->unitesTotalesDuPerso,
    ];
}
public function afficheGetAll(){
    $valeurs = $this->getAll();
    foreach ($valeurs as $cle => $valeur) {
        echo "$cle: $valeur\n <br>";
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