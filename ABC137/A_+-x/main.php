<?php

$inputs = explode(' ', trim(fgets(STDIN)));

$a = (int) $inputs[0];
$b = (int) $inputs[1];

$max = max($a + $b, $a - $b, $a * $b);
print_r($max);
