<?php
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo"\nDeclared 2D Array is :\n\n";

foreach ($array as $row) {
    foreach ($row as $values) {
        echo "$values ";
    }
    echo "\n";
}

echo "\nOutput shapes are :\n\n";

for ($i = 0; $i < count($array); $i++)
{
    for ($j = 0; $j < 3 - $i; $j++)
    { 
        echo $array[$i][$j] . " ";
    }
    echo "\n";
}

echo "\n";

for ($i = 0; $i < count($array); $i++) {
    for ($j = 3 - $i; $j < 4; $j++)
    { 
        echo $array[$i][$j] . " ";
    }
    echo "\n";
}

?>
