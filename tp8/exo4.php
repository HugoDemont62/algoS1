<?php

$gilles =[
    "id" => 1, "nom" => "Audemard", "prenom" => "Gilles", "email" => "gilles.audemard@univ-artois.fr",
    ];
$sebastien = [
    "id" => 2, "nom" => "Tabary", "prenom" => "Sébastien", "email" => "sebastien.tabaryd@univ-artois.fr"
];

$yann = [
    "id" => 3, "nom" => "Viseur", "prenom" => "Yann", "email" => "yann.viseur@univ-artois.fr"
];


$pers = [
    "gilles" => $gilles,
    "seb" => $sebastien,
    "yann" => $yann,
];

print_r($pers);
echo "<br>";
echo "<br>";




for($i = 0; $i < count($pers); $i++) {
    var_dump($pers[$i]);
}
