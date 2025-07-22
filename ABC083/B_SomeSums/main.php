<?php

$inputs = explode(' ', trim(fgets(STDIN)));

$value = (int) $inputs[0];
$min = (int) $inputs[1];
$max = (int) $inputs[2];

$total = 0;
for($i = 1; $i <= $value; $i++) {
    $sum = 0;
    $digits = str_split((string) $i);
    for($j = 0; $j < count($digits); $j++) {
        $sum += (int) $digits[$j];
    }

    if ($min <= $sum && $sum <= $max) {
        $total += $i;
    }
}
print_r($total);