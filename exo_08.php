<?php
$nb = 8; //le nombre dont on veut connaître la table
$i = 0; //index (pour commencer la boucle)
$n = 10; // jusqu'où la table doit aller


echo "Table de ", $nb, " : \n"; 

// while
while ($i <= $n) {
    echo $i, " x ", $nb, " = ", $i*$nb, "\n";
    $i++;
}

echo "\n\n"; 

// do ... while

$y = 0; //nouvel index

do { echo $y, " x ", $nb, " = ", $y*$nb, "\n";
    $y++;
}   while ($y <= $n);

echo "\n\n";


// for

for( $x=0; $x<=$n; $x++){
    echo $nb, " x ", $x, " = ", $nb*$x, "\n";
}

?>

