<?php 
include("../inputs.php");
readVariables("nb1", "nb2");

if($nb2 < $nb1) {
    echo "Ouch";

}
else{
    while($nb1 < $nb2){
        echo "$nb1 </br>";
        $nb1 += 1;
    }
}



?> 