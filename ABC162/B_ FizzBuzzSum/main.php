<?php

$items = (int) trim(fgets(STDIN));

$sum = 0;
for ($i = 1; $i <= $items; $i++) {
    if ($i % 3 != 0 && $i % 5 != 0) {
        $sum += $i;
    }
}

echo $sum;