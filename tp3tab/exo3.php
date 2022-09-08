<?php


$nb = [72,51,21,0,60,40];
echo "Les valeurs suivantes sont supérieur à 25:";
echo '</br>';
for($n = 0; $n < count($nb); $n += 1){
    if($nb[$n] > 25){
        echo $nb[$n];
        echo '</br>';
    }
}

echo "Les valeurs suivantes sont pairs:";
echo '</br>';

for($n = 0; $n < count($nb); $n += 1){
    if($nb[$n] %2 == 0){
        echo $nb[$n];
        echo '</br>';
    }
}

?>