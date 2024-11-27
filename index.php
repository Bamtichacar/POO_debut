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

