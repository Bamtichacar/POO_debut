<?php
abstract class Perso {
protected string $name;
protected int $PV;
protected int $endurance;
protected int $force;
protected bool $enVie;

public function __construct() {}
public function attaquer(){}
public function defendre(){}
public function deceder(){}
public function crashTheGameIfLoose(){}
}