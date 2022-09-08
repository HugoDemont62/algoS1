
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


    include("../store.php");






    registerVariable($noms, ['Jane Smith', 'John Dow', "Betty O'Brian", 'Jane Smith', 'John Dow Junior', 'Bill Baroud']);
    registerVariable($scores, [1250, 1780, 2420, 1250, 1990, 2120]);
    registerVariable($avatars, ['imgs/avatar-district.png', "imgs/avatar-05.png", "imgs/avatar3.png", "imgs/avatar_women.png", "imgs/avatar-04.png", "imgs/avatar-06.png"]);
    $avatars2 = [];
    $noms2 = [];
    $scores2 = [];


    if(isset($_POST['submit'])){
        $avatars2 = $_POST['avatars2'];
        $noms2 = $_POST['noms2'];
        $scores2 = $_POST['scores2'];



        array_push($avatars,$_POST['avatars2']);
        array_push($noms, $_POST['noms2']);
        array_push($scores, $_POST['scores2']);

    
        
    modifyRegisteredVariable($noms);
    modifyRegisteredVariable($scores);
    modifyRegisteredVariable($avatars);
    }
    



    echo "</br>";
    echo "</br>";
    print_r($noms);


        
    for($i=0; $i < count($scores); $i++){
            if ($scores[$i] < 1400){
                 $med[$i]='bronze';
            }
            if ($scores[$i] >= 1400 AND $scores[$i] <2000){
                 $med[$i]='silver';
            }
            if ($scores[$i] >= 2000){
                $med[$i]='gold';
            }
        
        }

        
    for($i=0; $i < count($noms); $i++){

            echo ("<div class='card'>
            <a href='del.php?nom=$noms[$i]'>&#x2716</a>
            <img src='$avatars[$i]' alt='Avatar'/>
            <div class='container'>
            <h4><b>$noms[$i]</b></h4>

            <p>$scores[$i] points</p>
            <span class='$med[$i]' > </span>
            </div>
            </div>");
        }

?>
         </main>
        </div>
    </div>
</body>
</html> 