


<?php 

include'css.css';


$tab = [
    ["1", 2, 12],
    ["2", 7, 13],
    ["3", 31, 21],
    ["18", 32, 26],
    ["45", 4, 5],
    ["1894", 69, 17],
];

echo $tab[0][0];

echo "<br>";
echo count($tab);
echo "<br>";
echo count($tab[0]);
echo "<br>";
print_r($tab[1]);

echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<table>";

for($i = 0; $i < count($tab); $i += 1) {
    echo "<tr>";
    echo "<br>";

    for($j = 0; $j < count($tab[$i]); $j += 1) {
        echo "<td>";
        echo $tab[$i][$j];
        echo "</td>";
    }
    echo "<tr>";
}


echo "</table>";
?>

