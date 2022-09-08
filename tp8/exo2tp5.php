<?php

$tab1 = [1,5,6,12];
$tab2 = [3,10,34];
$pos1 = 0;
$pos2 = 0;
$result = [ ]; // Le tableau résultat


$i = 0;
while ($i < count($tab1) AND $i < count($tab2)){// Tant que l'on n'a pas atteint la fin de l'un des deux tableaux
    if ($tab1[$pos1] < $tab2[$pos2])    {
        $result[] = $tab1[$pos1];
        $pos1 += 1;
    } else {
        $result[] = $tab2[$pos2];
        $pos2 += 1;
    }

                // On augmente la position associée à cet élément qui a été mis.

                // On termine par le tableau qui n'a pas été totalement parcouru
}

for($i = $pos1; $i < count($tab1); $i = $i + 1) {
    $result[] = $tab1[$i];
}

for($i = $pos2; $i < count($tab2); $i = $i + 1) {
    $result[] = $tab2[$i];
}

print_r($result);