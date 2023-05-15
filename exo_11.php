<?php
$voitures = array("Peugeot","Renault","BMW","Mercedes");     //tableau avec les marques
$nb = count($voitures);                                     //trouver le nombre de marque dans le tableau
echo "Il y a ", $nb, " marques de voitures dans le tableau. \n";

for( $x=0; $x<$nb; $x++){
    echo $voitures[$x], "\n";               //boucle qui affiche chaque marque du tableau
}
?>