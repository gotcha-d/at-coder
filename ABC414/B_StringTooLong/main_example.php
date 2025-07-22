<?php

$inputs = [];
while ($input = trim(fgets(STDIN))) {
    $inputs[] = explode(" ", $input);
}

$n = $inputs[0][0];

$totalLength = 0;
$ans = '';
for ($i = 1; $i <= $n; $i++) {
    $c = $inputs[$i][0];
    $l = $inputs[$i][1];
    if (strlen($l) > 3) {
        echo "Too Long";
        break;
    }
    $ans .= str_repeat($c, (int) $l);
    if (strlen($l) > 100) {
        echo "Too Long";
        return;
    }
}
echo $ans;

return;
