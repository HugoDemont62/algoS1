<?php
$nb = 0;

while($nb != 100){
    if($nb  % 10 == 0){
        echo "<p> $nb --Il faut <b>impérativement</b> indenter son code</p>";
        $nb++;
    }else{
        echo "<p> $nb Il faut <b>impérativement</b> indenter son code</p>";
        $nb++;
    }
    
}

?>