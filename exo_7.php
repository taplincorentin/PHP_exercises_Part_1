<?php
$age = 12;

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
}
?>
