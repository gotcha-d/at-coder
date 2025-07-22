<?php

$inputs = explode(' ', trim(fgets(STDIN)));
$a = (int) $inputs[0];
$b = (int) $inputs[1];

if ($a <= 5) {
    echo 0;
} elseif (6 <= $a && $a <= 12) {
    echo $b / 2;
} else {
    echo $b;
}
