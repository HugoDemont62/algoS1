<?php



$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;


$moyenne = ($note_francais + $note_histoire_geo + $note_maths ) / 3;


echo 'La moyenne est de '.$moyenne.' / 20.';

echo "</br";
echo "</br";echo "</br";


$prix_ht = 50;
$tva = 20;

$prix_ttc = $prix_ht%$tva;


echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';

