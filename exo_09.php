<?php

//valeurs 
$age = 32;
$sexe = "F";

//affichage des valeurs
echo "Age : ", $age, "\n";
echo "Sexe : ", $sexe, "\n";



//fonctions
/* switch ($sexe) {
    case "F":                                                   //cas où sexe = F
        if (18<=$age && $age<=35){                             //vérification de la tranche d'âge
            echo "la personne est imposable";
        }   else {
            echo "la personne n'est pas imposable";
        }
    break;

    case "H":                                                 //cas où sexe = H
        if ($age > 20){                                      //test pour l'âge
            echo "la personne est imposable";
        }   else {
            echo "la personne n'est pas imposable";
        }
    break;
        
}
*/
$oui="la personne est imposable";
$non="la personne n'est pas imposable";

if ($sexe == "F"){
    if(17<$age && $age<36){
        echo $oui;
    } else {echo $non;}
} elseif ($age>20){
    echo $oui;
 } else { echo $non;}

?>
