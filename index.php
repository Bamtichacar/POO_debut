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
echo'<br>';
$essai2 = new Nain('ugo');
var_dump($essai2);
echo'<br>';
echo'<br>';


$elfe = new Elfe('');
var_dump($elfe);
echo'<br>';
echo'<br>';

$nain = new Nain('');
var_dump($nain);
echo'<br>';
echo'<br>';
$cible;

$DomeDuTonnerre;
$DomeDuTonnerre = [$elfe, $nain];
$firstStrike = $nain ->defendre() - $elfe -> attaquer();
var_dump($firstStrike);
echo'<br>';
echo'<br>';

echo'<br>';
echo'<br>';

$elfe -> attaquerbis($nain);
echo'<br>';
echo'<br>';

var_dump($elfe);
echo'<br>';
echo'<br>';

var_dump($nain);
echo'<br>';
echo'<br>';


echo $elfe -> getgeneral('endurance');
echo'<br>';
echo'<br>';
echo $elfe -> getgeneral('PV');

// var_dump(GetValeurs::getValeursDeLInstance($elfe,'endurance')); ne marche pas, cf dans la classe GetValeurs



echo $elfe -> getPV();




