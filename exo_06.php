<?php
$prix = 9.99;                                        
$quant = 5;
$tva = 0.2;
$montant = $prix*$quant;                                                         //prix sans TVA
$total = $montant + ($montant*$tva);                                            //prix avec TVA

                               
echo "Prix unitaire de l'article : ", $prix, " €", "\n";
echo "Quantité : ", $quant, "\n";
echo "Taux de TVA : ", $tva, "\n";
echo "Le montant de la facture à régler est de : ", $total, " €";
?>
