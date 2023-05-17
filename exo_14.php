<?php
/*
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

*/

//afin d'optimiser, plutôt utiliser les fonctions date_...() de php

$aujd = new DateTime('now');   //obtenir la date d'aujourd'hui
$anniv = date_create("1997-04-25");
$age = date_diff($anniv,$aujd);
echo "Age de la personne : ", $age->y, " années, ", $age->m, " mois, ", $age->d, " jours";

?>