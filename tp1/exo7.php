<?php
// Un premier essai avec des données venant de l'utilisateur
include("../inputs.php"); // On inclut le programme précédent au notre

readVariables("nb1", "nb2", "age", "nom");  // On demande la lecture de deux nombres,

// Maintenant, On peut utiliser les données si celles-ci ont été saisies et envoyées


echo "$age";
echo"<br/>";
echo "$nom";
echo"<br/>";
echo "$nb1";
echo"<br/>";
echo "$nb2";



echo"<br/>";
echo"<br/>";
echo"<br/>";
if($age < 18) {
    echo"Vous êtes mineur monsieur $nom";
} else {
    echo"Vous êtes majeur monsieur $nom";
}
 echo"<br/>";



// Avez vous exactement 18 ans ?
if($age == 18) {
    echo"Vous avez 18 ans et le PassC";
}


?>
