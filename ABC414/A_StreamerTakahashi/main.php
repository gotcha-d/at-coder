<?php

$inputs = [];
while ($input = trim((string) fgets(STDIN))) {
    $inputs[] = explode(' ', $input);
}

$n = (int) $inputs[0][0];
$from = (int) $inputs[0][1];
$to = (int) $inputs[0][2];

$count = 0;
for ($i=1; $i <= $n; $i++) {
    if ($inputs[$i][0] <= $from && $to <= $inputs[$i][1]) {
        $count++;
    }
}

print_r($count);