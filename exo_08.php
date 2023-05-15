<?php
$x = 8; //le nombre dont on veut connaître la table
$i = 0; //index (pour commencer la boucle)
$n = 10; // jusqu'où la table doit aller


echo "Table de ", $x, " : \n"; 

// while
while ($i <= $n) {
    echo $i, " x ", $x, " = ", $i*$x, "\n";
    $i++;
}

echo "\n\n"; 

// do ... while

$y = 0; //nouvel index

do { echo $y, " x ", $x, " = ", $y*$x, "\n";
    $y++;
}   while ($y <= $n);
?>

