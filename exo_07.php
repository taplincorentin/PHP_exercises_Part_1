<?php
$age = 12;

/* //Première version trop longue//

if (6<=$age && $age<=7) {
  echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Poussin>>";
} elseif (8<=$age && $age<=9) {
  echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Pupille>>";
} elseif (10<=$age && $age<=11) {
  echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Minime>>";
} elseif (12<= $age && $age<18) {
    echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Cadet>>";
}
else {
  echo "l'enfant qui a ", $age, " ans n'appartient à aucune catégorie";
}*/

$cat;
if ($age>=12){
  $cat="Cadet";
} elseif($age>=10){
    $cat="Minime";
  } elseif($age>=8){
      $cat="Pupille";
    }
      else{
        $cat="Poussin";
      }

echo "l'enfant qui a ", $age, " ans appartient à la catégorie : ", $cat;
?>
