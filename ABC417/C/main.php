<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}

$N = (int) $inputs[0][0];
$K = (int) $inputs[0][1];
$X = (int) $inputs[0][2];

$strings = [];
for ($i = 1; $i <= $N; $i++) {
    $strings[] = $inputs[$i][0];
}

$combinations = [];
for ($i = 0; $i < $N; $i++) {
    for($j=0; $j < $N; $j++) {
        $combinations[] = $strings[$i] . $strings[$j];
    }
}

sort($combinations);
print_r($combinations[$X-1]);