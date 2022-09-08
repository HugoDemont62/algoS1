<?php
$nomSites = ["l'equipe", "Le bon coin", "Facebook", "Twitter"];
$liens = ["http://www.lequipe.fr", "http://leboncoin.fr", "http://facebook.com" , "http://www.twitter.com"];



echo "<ul>";

for($n = 0; $n < count($liens); $n+=1) {
 echo "<li><a href=$liens[$n]> $nomSites[$n]</a></li>";
 echo '</br>';
}
echo "</ul>";

?>