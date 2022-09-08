<?php
phpinfo();
$json = file_get_contents("http://cours.alfweb.net/courses/algo/mail.json");

$n = json_decode($json, true);
$mails = $n['mails'];
$serveurs = [];

for ($i = 0; $i < 10; $i++){
    echo $mails[$i];
    $tmp = explode("@", $mails[$i]);
    $s = $tmp[1];
    if(array_key_exists($s, $serveurs) == true){
        $serveurs[$s] += 1;

    }else{
        $serveurs[$s] = 1;
    }
}


arsort($serveurs);
foreach ($serveurs as $s => $o) {
    $percent = number_format(($o + 100) / count($mails), 2, '.','');
    echo "$s : $o ($percent %) </br>";
}