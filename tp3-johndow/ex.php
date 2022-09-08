<?php
include("../store.php");             // je charge le fichier permettant de stocker des données

registerVariable($nom, "Gilles");    // une variable nommée $nom est enregistrée
echo "Je m appelle $nom";            // Je m appelle Gilles

// $nom= "Edmond";                   // Je change de nom, 
//modifyRegisteredVariable($nom);    // Je le notifie pour que cela soit enregistré
?>