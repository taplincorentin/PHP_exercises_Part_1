<?php
$a = "Notre formation DL commence aujourd'hui";
$nb_car = strlen($a);
$a2 = str_replace("aujourd'hui","demain", $a);
echo $a, "\n", $a2;
?>