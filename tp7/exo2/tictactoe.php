<?php
include 'style.css';

function creePlateauVide() {
    
$tab = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' '],
];

return $tab;

}




function joueCoup($plateau, $joueur) {
    // On suppose que le plateau n est pas plein.
    // il nous faut trouver une case vide
    $trouveVide = false;  
    
    while($trouveVide == false) { // Tant que l on pas trouvé une case vide
        $ligne   = rand(0, 2);    // on joue dans une ligne
        $colonne = rand(0, 2);    // on joue dans une colonne
        if($plateau[$ligne][$colonne] == " ") { // super ! la case est vide
            $plateau[$ligne][$colonne] = $joueur; // on joue ici
            $trouveVide = true;          // on a trouvé une case vide, faut sortir du while                
        }
    }
    return $plateau; // On renvoie le plateau
}


function voirTab($tab){


    echo "<table>";
for($i = 0; $i < count($tab); $i += 1) {
    echo "<tr>";
    echo "<br>";
    for($j = 0; $j < count($tab[$i]); $j += 1) {
        echo "<td>";
        echo $tab[$i][$j];
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";

}



function ligneGagnante($plateau, $ligne, $joueur) {
    for($i = 0; $i < count($plateau[$ligne]); $i++) {
        if($plateau[$ligne][$i] != $joueur){    
         return false;         
        }
    }
    return true;
}

function colonneGagnante($plateau, $colonne, $joueur) {
    for($i = 0; $i < count($plateau[$colonne]); $i++) {
        if($plateau[$i] [$colonne]!= $joueur){    
         return false;         
        }
    }
    return true;
}

function aGagneSurUneLigne($plateau, $joueur){
    for($i = 0; $i < count($plateau); $i++){
        if(ligneGagnante($plateau, $i, $joueur) == true){
            return true;
        }
    }
return false;
}



function aGagneSurUneColonne($plateau, $joueur){
    for($i = 0; $i < count($plateau); $i++){
        if(colonneGagnante($plateau, $i, $joueur) == true){
            return true;
        }
    }
return false;
}







function aGagneSurLaDiagonale($plateau, $joueur) {
    if($plateau[0][0] != $joueur){
        return false;
    }elseif($plateau[1][1] != $joueur){
            return false;
        }elseif($plateau[2][2] != $joueur){
            return false;
        }else{
            return true;
        }

}




function aGagneSurLaDiagonaleInverse($plateau, $joueur) {
    if($plateau[2][0] != $joueur){
        return false;
    }elseif($plateau[1][1] != $joueur){
            return false;
        }elseif($plateau[0][2] != $joueur){
            return false;
        }else{
            return true;
        }

}






            
$finPartie = false; // La partie n est pas terminée

$nb = 0; // combien de coups ont été joués

if(rand(0, 1) == 0) {
    $joueur = "X";
} else {
    $joueur = "O";
}

while($finPartie == false) {  
    echo "joueur $joueur joue";   
    // Appeler la fonction joueCoup, ne pas oublier que ca retourne le nouveau plateau de jeu
    joueCoup($plateau, $joueur);
    // Afficher le nouveau plateau de jeu
    echo $plateau;
    
    $nb = $nb + 1; // un coup supplémentaire
    if(aGagneSurUneColonne($plateau, $joueur) || aGagneSurLaDiagonale($plateau, $joueur) || aGagneSurLaDiagonaleInverse($plateau, $joueur) || aGagneSurUneLigne($plateau, $joueur)) {
        echo "Le joueur $joueur a gagné";
        $finPartie = true;
        break; // C est la fin
    } else {
        if ($trouveVide == true) {
            echo "partie Nulle";
            $finPartie = true;
            break;
        }
    }
    if($joueur == "X"){
        $joueur = "O";
    }else{
        $joueur = "X";
    }

    // Il faut changer de joueur, si c etait X ca devient O et vice versa
}

// Faut tester maintenant.. j espere que vous ne faites pas une boucle infinie ;)










voirTab($plateau);
aGagneSurUneLigne($plateau, "X");
aGagneSurUneColonne($plateau, "X");
aGagneSurLaDiagonale($plateau, "X");
aGagneSurLaDiagonaleInverse($plateau,"X");



?>