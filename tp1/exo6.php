<?php
        $moyenneGenerale = 13.47;

        // Vous devez complétez ce code et afficher la mention obtenue au bac

        if($moyenneGenerale >= 0 AND $moyenneGenerale <= 20){
          if($moyenneGenerale < 12){
            echo"Pas de mention";
          }else{
            if($moyenneGenerale >=12 AND $moyenneGenerale <= 14) {
              echo"Tu as assez bien";
            }
            if($moyenneGenerale >=14 AND $moyenneGenerale <= 16){
              echo"Tu as mention bien";
            }
            if($moyenneGenerale >=16 AND $moyenneGenerale <= 20){
              echo" GG tu as mention Très bien";
            }
          }
        }else{
          echo"Rentre une bonne note";
        }




        ?>
