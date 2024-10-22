<?php

echo "<h1>Boucle while</h1>";
$i = 0; // attribution valeur 0 à la variable i
while ($i < 100) { // boucle qui se répète tant que $i est inférieur à 100
    if ($i < 10) { // condition "if" qui dit que si la valeur de i est inférieur à 10 alors on rajoute un 0 devant chaque chiffre
        echo "0". $i . ", ";
        $i++; // incrementation de 1 à la variable i à chaque répétition de la boucle
    } else { // si valeur de i supérieure ou égale à 10 alors j'affiche juste le chiffre
        echo $i . ", ";
        $i++; // incrementation de 1 à la variable i à chaque répétition de la boucle
    }
}

echo "<h1>Boucle for</h1>";
for ($j = 0; $j < 100; $j++) { // attribution de 0 à la variable j; répétition boucle tant que j est inférieur à 100; incrémentation de 1 à chaque répétition de la boucle
    if ($j < 10) { // condition qui dit que si valeur de j inférieure à 10 alors j'ajoute un 0 devant le chiffre
        echo "0". $j . ", ";
    } else { // si valeur de j supérieure ou égale à 10 alors afficher le chiffre seul
        echo $j . ", ";
    }
}