<?php
$anniv = array(25,04,1997);
$aujd = array(date("j"),date("m"),date("Y"));


$jour= $aujd[0] - $anniv[0];
$mois=$aujd[1] - $anniv[1];
$année=$aujd[2] - $anniv[2];

if($jour<0){
    $jour = $jour+30;
    $mois = $mois-1;
}

if($mois<0){
    $mois = $mois+12;
    $année = $année-1;
}

echo "Age de la personne : ", $année, " années, ", $mois, " mois, ", $jour, " jours"; 
?>