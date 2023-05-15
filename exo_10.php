<?php
$payer = 152; //montant à payer
$verser = 200; //montant donné par le client
$rendu = $verser - $payer; //montant à rendre au client
$pieces = array(1,2,5,10); //tableau des pièces utilisables
$a=$b=$c=$d=0; //créer 4 variables à 0 pour le nombre de chaque pièce

while ($rendu >= $pieces[3]){   //on calcule le nombre de pièces de 10 nécessaires
    $a++;
    $rendu = $rendu- $pieces[3];
}
while ($rendu >= $pieces[2]){   //on calcule le nombre de pièces de 5 nécessaires
    $b++;
    $rendu = $rendu- $pieces[2];
}
while ($rendu >= $pieces[1]){   //on calcule le nombre de pièces de 2 nécessaires
    $c++;
    $rendu = $rendu- $pieces[1];
}
while ($rendu >= $pieces[0]){   //on calcule le nombre de pièces de 1 nécessaires
    $d++;
    $rendu = $rendu- $pieces[0];
}

echo "Rendu de monnaie : \n", $a, " billet(s) de 10 -  ", $b, " billet(s) de 5 -  ",$c, " pièce(s) de 2 -  ",$d, " pièce(s) de 1 -  ";
?>