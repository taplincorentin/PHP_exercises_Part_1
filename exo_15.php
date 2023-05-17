<?php
    require("personnes.php");


    $p1 = new Personne("DUPONT","Michel","1980-02-19");
    $p2 = new Personne("DUCHEMIN","Alice","1985-01-17");       // Instanciation de deux personnes: p1 et p2


    echo $p1;
    echo $p2;     // renvoie qqchose car on a une fonction __toString
    
    // var_dump($p1->age()); (permet de voir un tableau)

?>