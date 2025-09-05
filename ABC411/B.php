<?php

$n = (int) trim(fgets(STDIN));
$terminals = array_map("intval", explode(" ", trim(fgets(STDIN))));
$ans = [];

for ($i = 0; $i < $n-1; $i++) {
    $sum = $terminals[$i];
    $line = $sum;
    for ($j = $i+1; $j < $n-1; $j++) {
        $sum += $terminals[$j];
        $line .= " " . $sum;
    }
    echo $line .PHP_EOL;
}

