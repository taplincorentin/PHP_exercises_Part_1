<?php
$personnes = array(                                     //creation du tableau multidimensionnel
    array("Mickael", "FRA"),
    array("Virgile", "ESP"),
    array("Marie-Claire", "ENG")
);
sort($personnes);
$nb = count($personnes);                               //nombres de lignes dans le tableau


for($x=0; $x<$nb; $x++){
    if ($personnes[$x][1] == "ESP"){                  //vérifie si la personne est esapgnole
        echo "Hola ", $personnes[$x][0], "\n";
    }
    if ($personnes[$x][1] == "ENG"){                 //vérifie si la personne est anglaise
        echo "Hello ", $personnes[$x][0], "\n";
    }
    if ($personnes[$x][1] == "FRA"){                 //vérifie si la personne est française
        echo "Salut ", $personnes[$x][0], "\n";
    }
}
?>