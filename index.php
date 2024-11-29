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


$elfe = new Elfe('henri');
var_dump($elfe);
echo'<br>';
echo'<br>';

$nain = new Nain('jacques');
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

//$elfe -> attaquerbis($nain);
echo'<br>';
echo'<br>';

/* var_dump($elfe);
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
echo'<br>';
echo'<br>';

//echo $elfe -> getPV();
echo "<h2>test des attaques</h2>";
echo'<br>';
echo'<br>';
echo "<h4>atk ac arc niv 1</h4>";
echo'<br>';
echo'<br>';

echo $elfe -> getgeneral('PV');
echo '<br>';
echo $nain -> getgeneral('PV');
echo '<br>';
echo $elfe -> attaquerEnnemiAvecArme($nain, 'arc', 'niveau_1');
echo '<br>';
echo $elfe -> getgeneral('PV');
echo '<br>';
echo $nain -> getgeneral('PV');
echo '<br>';

echo'<br>';
echo'<br>';
$elfe -> setEnVie(false);


echo "<h4>atk ac arc niv 2</h4>";
echo'<br>';
echo'<br>';

echo $elfe -> getgeneral('PV');
echo '<br>';
echo $nain -> getgeneral('PV');
echo '<br>';
echo $elfe -> attaquerEnnemiAvecArme($nain, 'arc', 'niveau_2');
echo '<br>';
echo $elfe -> getgeneral('PV');
echo '<br>';
echo $nain -> getgeneral('PV');
echo '<br>';

echo'<br>';
echo'<br>';

echo "<h4>atk ac arc niv inexistant</h4>";
echo'<br>';
echo'<br>';

echo $elfe -> getgeneral('PV');
echo '<br>';
echo $nain -> getgeneral('PV');
echo '<br>';
echo $elfe -> attaquerEnnemiAvecArme($nain, 'arc');
echo '<br>';
echo $elfe -> getgeneral('PV');
echo '<br>';
echo $nain -> getgeneral('PV');
echo '<br>';


echo'<br>';
echo'<br>';
//echo $elfe -> getAll();
echo'<br>';
echo'<br>';
//echo $nain -> getAll();

// faire ça car on ne peut pas afficher un tableau :
print_r($elfe->getAll());
echo'<br>';

// ou 
var_dump($elfe->getAll());
echo'<br>';

//ou
echo implode(', ', $elfe -> getAll());
echo'<br>';

// encore 
$valeurs = $elfe->getAll();
foreach ($valeurs as $cle => $valeur) {
    echo "$cle: $valeur\n";
}
echo'<br>';

echo'<br>';
$elfe -> afficheGetAll();
echo'<br>';
echo'<br>';
$nain -> afficheGetAll();


echo'<br>';
echo'<br>';
echo $elfe -> getgeneral('name');
echo $elfe -> getgeneral('force');
 */
echo'<br>';
echo'<br>';
$nain -> afficheGetAll();
echo'<br>';
echo'<br>';
//$elfe ->getUnitesTotalesDuPerso();
echo'<br>';
echo'<br>';
$elfe -> afficheGetAll();
echo'<br>';
echo'<br>';




echo "<h3>Combat test</h3>";
echo'<br>';
echo'<br>';
$elfe -> attaquerEnnemiAvecArme($nain, 'arc','niveau_1','cavalier', 'niveau_3');

echo'<br>';
echo'<br>';
$elfe -> afficheGetAll();   
echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';
$nain -> afficheGetAll();
echo'<br>';
echo'<br>';


