<?php

//valeurs 
$age = 20;
$sexe = "H";

//affichage des valeurs
echo "Age : ", $age, "\n";
echo "Sexe : ", $sexe, "\n";

//fonctions
switch ($sexe) {
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

?>