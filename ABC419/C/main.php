<?php

$n = intval(trim(fgets(STDIN)));
$people =  [];
for ($i = 1; $i <= $n; $i++) {
    [$r_i, $c_i] = explode(' ', trim(fgets(STDIN)));
    $people[$i] = [
        'vertical' => $r_i,
        'horizontal' => $c_i,
    ];
}

$maxDiff = 0;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i + 1; $j <= $n; $j++) {
        $verticalDiff = abs($people[$i]['vertical'] - $people[$j]['vertical']);
        $horizontalDiff = abs($people[$i]['horizontal'] - $people[$j]['horizontal']);
        $now = $verticalDiff + $horizontalDiff;
        $maxDiff = max($maxDiff, $now);
    }
}

echo $maxDiff . PHP_EOL;