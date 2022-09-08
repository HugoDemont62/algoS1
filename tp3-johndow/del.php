<?php

include("../inputs.php");
include("../store.php");



registerVariable($noms, ['Jane Smith', 'John Dow', "Betty O'Brian", 'Jane Smith', 'John Dow Junior', 'Bill Baroud']);
registerVariable($scores, [1250, 1780, 2420, 1250, 1990, 2120]);
registerVariable($avatars, ['imgs/avatar-district.png', "imgs/avatar-05.png", "imgs/avatar3.png", "imgs/avatar_women.png", "imgs/avatar-04.png", "imgs/avatar-06.png"]);
    
$position = [-1];

for($i=0; $i < count($noms); $i++){
    if($noms[$i] == $nom){
        $position = $i;
    }
}

if($position == -1) {
    echo "Erreur";
}else{
    for($i = $position; $i < count($noms); $i++){
        $noms[$i] = $noms[$i + 1];
        $scores[$i] = $scores[$i + 1];
        $avatars[$i] = $avatars[$i + 1];
    }
    array_pop($noms);
    array_pop($scores);
    array_pop($avatars);
}



    modifyRegisteredVariable($noms);
    modifyRegisteredVariable($scores);
    modifyRegisteredVariable($avatars);

    header('Location:index.php');


?>