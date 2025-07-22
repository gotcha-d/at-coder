<?php

$inputs = [];
while ($input = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $input);
}

$count = (int)$inputs[0][0];
$numbers = $inputs[1];
$target = $inputs[2][0];

for ($i = 0; $i < $count; $i++) {
    if ($numbers[$i] == $target) {
        echo "Yes";
        break;
    }

    if ($i == $count - 1) {
        echo "No";
    }
}
