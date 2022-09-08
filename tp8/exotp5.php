<?php

$tab1 = [5, 6, 3];
$tab2 = [7, 6, 3];

$tableau = true;

if(count($tab1) != count($tab2)) {
    $tableau = "Les deux tableaux sont différents";
    return $tableau;
}else {
    for($i = 0; $i < count($tab1); $i++){
        if($tab1[$i] == $tab2[$i]){
            echo "</br>";
            echo "Ouais c bon poour le numéro $i";
            echo "</br>";
        }else{
            echo "</br>";
            echo "OHOH ERROR pour $i";
            echo "</br>";
        }

    }

}