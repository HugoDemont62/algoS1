<?php 
include("../inputs.php");
readVariables("nb1","op1");

    if($op1 == "*"){
        for($m = 0; $m < 11; $m++){
            $resul = $nb1*$m;
            echo "<li> $nb1 $op1 $m = $resul</li>";
        }
    }
        if($op1 == "+") {
            for($m = 0; $m < 11; $m++){
                $resul = $nb1+$m;
                echo "<li> $nb1 $op1 $m = $resul</li>";
            }
        }



?> 