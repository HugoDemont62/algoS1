<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>People are people</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="container">
    <div>
        <nav>
            <h1>People are People<span class="right"><a href="add.php">+</a></span></h1>
        </nav>
        <main>




<?php
include("../inputs.php");
include("../store.php");

    $logins = ["minion", "buzz", "wazowski", "wall-e"];
    $passwords = ["3b4b008193bd1de4aa2a79c33d41ce327329c692", "0bbbba7770b1bbf11a4ba4287fb5f0d87d17df25", "b78847592cd1411843d936c533e7bef55d6539e9", "33667000f223ce8b688dd4de29962c81bb9afb63"];

    readVariables('login','password');



for($i=0; $i < count($logins); $i++){
if($login == $logins[$i]){
    if(sha1($password) == $passwords[$i]){
        echo 'marche askip';
        echo "</br>";
        echo "</br>";
        echo $login;
        echo "</br>";
        echo "</br>";
        echo $password;
        echo "</br>";
        echo "</br>";
        echo sha1($password);
        echo "</br>";
        echo "</br>";
        header('Location: index.php');
    }else {
        echo 'marche pas change ton mdp';
        echo "</br>";
        echo "</br>";

    }
}else {
    echo 'marche pas';
    
}


   
}
    






?>
         </main>
        </div>
    </div>
</body>
</html> 