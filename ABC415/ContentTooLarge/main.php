<?php

$inputs = [];
while ($input = trim((string) fgets(STDIN))) {
    $inputs[] = explode(' ', $input);
}

$capacity = (int) $inputs[0][1];
$contentsCount = (int) $inputs[0][0];

$total = 0;
for ($i=0; $i < $contentsCount; $i++) {
    $total += (int) $inputs[1][$i];
}

print_r($total <= $capacity ? "Yes" : "No");

