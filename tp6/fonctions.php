<?php
// exo 2

function bonjour($nom) {
    return "Bonjour $nom<br/>";  // echo un bonjour avk le $nom donné dans la function
}

$hug = "Hugo";
echo bonjour($hug);
echo bonjour("Killian4252");

?>

<?php
// exo 3


function recherche($tab, $v) { // Recherche si $v appartient au tableau $tab (je ne sais pas que in_array existe)
    for($i = 0; $i < count($tab); $i = $i + 1) {
        if($tab[$i] == $v) {
            
            return "true";
        } 
    }    return "false";

}   

echo recherche([5,4,9,33,8,4], 14);
echo recherche([5,4,9,33,8,14], 14);



?>


<div id='main'>
<?php

// exo 4 (reprise du 5 du td3)


function bullnote($prenom, $nom) {
    include("../inputs.php");
    readVariables("prenom", "nom", "matieres[4]", "notes[4]");
    
    echo "<table class='timecard'>
            <caption>$prenom $nom</caption>
            <thead>
            <tr>
                <th id='thDay'>Matière</th>
                <th id='thRegular'>Note</th>
                <th id='thOvertime'>Eq. US</th>
            </tr>
            </thead>
            <tbody>";
    for ($i = 0; $i < count($matieres); $i++) {
        if ($notes[$i] < 8) {
            $lettre = "E";
        }
        if ($notes[$i] >= 10 && $notes[$i] < 13) {
            $lettre = "C";
        }
        if ($notes[$i] >= 14 && $notes[$i] < 16) {
            $lettre = "B";
        }
        if ($notes[$i] >= 16) {
            $lettre = "A";
        }
        echo "<tr>
                    <th>$matieres[$i]</th>
                    <td>$notes[$i]</td>
                    <td>$lettre</td>
                    </tr>";
    }
    $somme = 0;
    for ($i = 0; $i < count($notes); $i++) {          //  Commentez :
        $somme = $somme + $notes[$i];                 //  Commentez :
    }
    $moyenne = $somme / count($notes);
    if ($moyenne < 8) {
        $lettre = "E";
    }
    if ($moyenne >= 10 && $moyenne < 13) {
        $lettre = "C";
    }
    if ($moyenne >= 14 && $moyenne < 16) {
        $lettre = "B";
    }
    if ($moyenne >= 16) {
        $lettre = "A";
    }
    
    
    echo "</tbody>
            <tfoot>
            <tr>
                <th>Moyenne</th>
                <td>$moyenne</td>
                <td>$lettre</td>
            </tr>
            </tfoot>
        </table>
    </div>";
    
}


bullnote("Marmud", "Pépé");


?>

<!doctype html> 
<html lang="fr"> 
<head> 
 <meta charset="utf-8"> 
 <title>Bulletin</title> 
 <meta name="description" content="Page de calcule de note gén"> 
</head> 
<body>  
    <div id="main">
<table class="timecard">

<thead>
    <tr>
        <th id="thDay">
            Matieres
        </th>
        <th id="thRegular">
            Note
        </th>
        <th id="thOvertime">
            Eq. US
        </th>
    </tr>
</thead>
 <tbody>
     <tr>
         <th>
            <?php echo $matieres[0]; ?>
         </th>
         <td>
         <?php echo $notes[0]; ?>
         </td>
         <td>
         <?php echo $EqUS[0]; ?>
         </td>
     </tr>
     <tr>
         <th>
         <?php echo $matieres[1]; ?>
         </th>
         <td>
         <?php echo $notes[1]; ?>
         </td>
         <td>
         <?php echo $EqUS[1]; ?>
         </td>
     </tr>
     <tr>
         <th>
         <?php echo $matieres[2]; ?>
         </th>
         <td>
         <?php echo $notes[2]; ?>
         </td>
         <td>
         <?php echo $EqUS[2]; ?>
         </td>
     </tr>

     <tr>
         <th>
         <?php echo $matieres[3]; ?>
         </th>
         <td>
         <?php 
         
         echo $notes[3]; 
         ?>
         </td>
         <td>
         <?php echo $EqUS[3]; ?>
         </td>
     </tr>

     
 </tbody>

 <tfoot>
     <tr>
         <th>
             Moyenne
         </th>
     <td>
     <?php echo $moyenne; ?>
     </td>
     <td>
     <?php echo $EqUS[4]; ?>
     </td>
     </tr>
 </tfoot>
</table>
</div>


<style type="text/css">
 body {
     background-color: #f6f6ff;
     font-family: Calibri, Myriad;
 }

 #main {
     width: 780px;
     padding: 20px;
     margin: auto;
 }

 table.timecard {
     margin: auto;
     width: 600px;
     border-collapse: collapse;
     border: 1px solid #fff; /*for older IE*/
     border-style: hidden;
 }

 table.timecard caption {
     background-color: #f79646;
     color: #fff;
     font-size: x-large;
     font-weight: bold;
     letter-spacing: .3em;
 }

 table.timecard thead th {
     padding: 8px;
     background-color: #fde9d9;
     font-size: large;
 }

 table.timecard thead th#thDay {
     width: 40%;
 }

 table.timecard thead th#thRegular, table.timecard thead th#thOvertime, table.timecard thead th#thTotal {
     width: 20%;
 }

 table.timecard th, table.timecard td {
     padding: 3px;
     border-width: 1px;
     border-style: solid;
     border-color: #f79646 #ccc;
 }

 table.timecard td {
     text-align: right;
 }

 table.timecard tbody th {
     text-align: left;
     font-weight: normal;
 }

 table.timecard tfoot {
     font-weight: bold;
     font-size: large;
     background-color: #687886;
     color: #fff;
 }

 table.timecard tr:nth-child(even) {
     background-color: #fde9d9;
 }

</style>




</body> 
</html>