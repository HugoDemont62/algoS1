<?php

$pays = [ // "clef" => valeur
    "France" => 68.2,
    "Belgique" => 11.4,
    "Allemagne" => 82.9,
    "Italie" => 60.5,
    "Espagne" => 46.7,];

print_r($pays);
echo "<br>";
echo "<br>";
echo $pays["France"];
echo "<br>";
echo "<br>";


foreach ($pays as $country => $habitants) {
    echo "The {$country} have {$habitants} </br>";
}

if (array_key_exists("Norvège", $pays)) {
    echo "<br>";
    echo "<br>";
    echo "La Norvège fait bien partie du tab";
}else {
    echo "<br>";
    echo "<br>";
    echo "Norvège ? Non mdr";
}

echo "<br>";
echo "<br>";
$world = $pays;
echo array_sum($world);


?>