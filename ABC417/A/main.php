<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}

$length = $inputs[0][0];
$from = $inputs[0][1];
$to = $inputs[0][2];
$str = $inputs[1][0];
$chars = str_split($str);

$result = true;
for($i = $from - 1; $i <= ($to -1); $i++) {
    if ($chars[$i] != 'o') {
        $result = false;
        break;
    }
}

print_r($result ? "Yes": "No");
