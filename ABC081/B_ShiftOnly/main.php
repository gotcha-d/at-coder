<?php

function isEven(int $value) {
    return $value % 2 === 0;
}
$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(" ", $line);
}

$length = (int) $inputs[0][0];
$numbers = array_map(fn($value) => (int) $value, $inputs[1]);
$canContinue = true;
$counter = 0;

while (true) {
    for ($i = 0; $i < $length; $i++) {
        if (isEven($numbers[$i]) === false) {
            $canContinue = false;
            break;
        }
    }

    if (!$canContinue) {
        break;
    }

    $numbers = array_map(fn($value) => $value / 2, $numbers);
    $counter++;
}
print_r($counter);