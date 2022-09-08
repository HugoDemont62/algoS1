<?php
    $tableau = [1, 5, 12, 4, 19];                       //  Commentez :  Tableau nomé tableau contenant 5 valeurs
    $somme = 0;                                         //  Commentez :  initialisation de variable de somme qui vaut 0
    for($i = 0; $i  < count($tableau); $i++) {          //  Commentez :   début de la boucle for avec i qui vaut 0, nombre d'element avant fermeture de la boucle
        $somme = $somme + $tableau[$i];                 //  Commentez :   somme vaut désormais l'addition de lui même et de la somme dans tableau par rapport à la valeur i 
        echo "La somme vaut maintenant : $somme<br />"; //  Commentez :  echo du résult
    }
    echo "Et à la fin = $somme<br />";                  //  Commentez :  echo du result final
    
    
    // La fonction fait le calcule de la valeur précédente du tableau plus celle de la nouvelle: ex : 0+1 = 1  1+5= 6  6+12=18  18+4 = 22 22+19= 41 et elle retourne dans res final 41
    
    ?>