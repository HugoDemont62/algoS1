<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout</title>
</head>
<body>

<form action="index.php" method="POST" enctype="multipart/form-data" >

<label for="">insert image</label>
<input type="text" value="choisir l'image" name="avatars2"><br><br>
<label for="">Insert le nom</label>
<input type="text" name="noms2"><br><br>
<label for="">insert les points</label>
<input type="number" name="scores2"><br><br>
<input type="submit" name="submit" value="bouton">


<?php 

$avatars2 = $_FILES['avatars2']['name'];

session_start(); 

if(isset($_POST['submit'])){
    array_push($avatars, $_POST['avatars2']);
    array_push($noms, $_POST['noms2']);
    array_push($scores, $_POST['scores2']);


}



?>

</form>
</body>
</html>