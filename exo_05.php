<?php
$francs = 100;                                             //valeur de base en francs
$euros = $francs/6.55957;                                 //conversion de francs à euros
$euros = number_format($euros, 2);                       //faire que le résultat ait 2 décimales (aurait pû utiliser la fonction round())
echo "Montant en francs : ", $francs, "\n";
echo $francs, " francs = ", $euros, " €";
?>
