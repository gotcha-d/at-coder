<?php

$inputs = [];
while ($input = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $input);
}

$result = '';
$n = $inputs[0][0];

for ($i=1; $i <= $n; $i++) {
    $char = $inputs[$i][0];

    if (strlen($inputs[$i][1]) > 3 || (int) $inputs[$i][1] > 100) {
        echo "Too Long";
        break;
    }
    $length = (int) $inputs[$i][1];
    $result .= str_repeat($char, $length);

    if (strlen($result) > 100) {
        echo "Too Long";
        break;
    }

    if ($i == $inputs[0][0]) {
        echo $result;
    }
}
