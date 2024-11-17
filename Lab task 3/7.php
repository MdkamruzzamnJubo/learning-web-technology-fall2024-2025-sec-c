<?php
$numbers = [
    [1, 2, 3],
    [12],
    [1]
];

$letters = [
    ['A'],
    ['B', 'C'],
    ['D', 'E', 'F']
];

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

echo "\n";

foreach ($numbers as $row) {
    foreach ($row as $num) {
        echo "$num ";
    }
    echo "\n";
}

echo "\n";

foreach ($letters as $row) {
    foreach ($row as $letter) {
        echo "$letter ";
    }
    echo "\n";
}

?>
