<?php

echo "Enter numbers separated by comma (e.g. 5,3,9,1): ";
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));

$array = explode(',', $input);

$array = array_map('intval', $array);
sort($array);

echo "Sorted array: ";
print_r($array);
?>
