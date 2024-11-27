<?php
include './autoLoader.php';

$maVoiture = new Voiture('Audi', 'rx5', 144, 270, 3);
var_dump($maVoiture);
echo'<br>';

$maVoiture->setMarque('BMW');
var_dump($maVoiture);
echo'<br>';

$maVoiture->setMarque('wzdzfze');
var_dump($maVoiture);
echo'<br>';

$essai = new Elfe('david');
var_dump($essai);
echo'<br>';

$elfe = new Elfe('');
$nain = new Nain('');
$DomeDuTonnerre;
$DomeDuTonnerre = [$elfe, $nain];
$firstStrike = $nain ->defendre() - $elfe -> attaquer();

