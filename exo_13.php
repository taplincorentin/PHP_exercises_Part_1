<?php
/*function affichetab($tab){
    $i= count($tab);
    for($y=0; $y<$i; $y++){
        echo " ", $tab[$y];
    }
}

$notes= array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$nb = count($notes);
$total = 0; 
for($x=0; $x<$nb; $x++){
    $total = $total + $notes[$x];
}

$moyenne = $total/$nb;
$moyenne = number_format($moyenne, 2); 

echo "les notes obtenues par l'élève sont :";
affichetab($notes);
echo "\n Sa moyenne générale est donc de : ", $moyenne;
*/

//pas opti
//utiliser implode() et array_sum()

$notes= array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$nb= count($notes);
$total= array_sum($notes);
$moyenne=$total/$nb;
echo "les notes obtenues par l'élève sont: ", implode(", ", $notes), "\n";
echo "sa moyenne générale est donc de : ", number_format($moyenne, 2);

?>