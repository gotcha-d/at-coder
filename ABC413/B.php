<?php

$n = trim(fgets(STDIN));
$strings = [];
for ($i = 0; $i < $n; $i++) {
    $strings[] = trim(fgets(STDIN));
}

$combinations = [];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($i == $j) {
            continue;
        }
        $key = $strings[$i] . $strings[$j];
        if (!isset($combinations[$key])) {
            $combinations[$key] = true;
        }
    }
}

echo count(array_keys($combinations)) . PHP_EOL;