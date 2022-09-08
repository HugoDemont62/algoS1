<?php



$json = file_get_contents("package.json");
echo($json);
echo "</br>";
echo "</br>";

$personnes = json_decode($json, true);


foreach ($personnes as $p){
    echo $p{'nom'}." ".$p{'prenom'}. "</br>";
}