<?php
abstract class Perso {
protected string $name;
protected int $PV;
protected int $endurance;
protected int $force;
protected bool $enVie;
protected int $unitesDeEnVie;
protected int $unitesDeTalent;
protected int $unitesDeArme;
//protected int $unitesDeRatelier;
protected int $UnitesTotalesDuPerso;


public function __construct() {}
public function attaquer(){}
public function defendre(){}
public function deceder(){}
public function crashTheGameIfLoose(){}
public function pointsestenVie(){}
public function UnitesTotalesDuPerso(){}
public function UnitesArmee(){}
}