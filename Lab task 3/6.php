<?php
$array = [10, 20, 30, 40, 50];
$search = 30;

$found = false;

foreach ($array as $element) {
    if ($element == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search is found in the array.\n";
} else {
    echo "$search is not found in the array.\n";
}
?>
