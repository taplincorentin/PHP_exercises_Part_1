<?php
$age = 10;

if (6>=$age<=7) {
  echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Poussin>>";
} elseif (8>=$age<=9) {
  echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Pupille>>";
} elseif (10>=$age<=11) {
  echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Minime>>";
} elseif ($age>=12) {
    echo "l'enfant qui a ", $age, " ans appartient à la catégorie <<Cadet>>";
}
else {
  echo "l'enfant qui a ", $age, " ans n'appartient à aucune catégorie";
}
?>
