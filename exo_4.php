<?php

//  on veut savoir si la phrase de la fonction $a est palindrome (ne fonctionne pas avec les caractères spéciaux)

$a = "Engage le jeu que je le gagne";
$a2 = str_replace(" ","", $a); // on retire les espaces
$a2 = strtolower($a2); // on retire les majuscules
$a3 = strrev($a2); // on inverse la phrase sans espaces ni majuscules

if ($a2 == $a3) {
    echo "la phrase <<", $a, ">> est palindrome";
}   else {                                                                      // on vérifie si la phrase sans espaces et celle inversée sont identiques 
    echo "la phrase <<", $a, ">> n'est pas palindrome";
}
?>