<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$S_string = str_split(trim(fgets(STDIN)));
$T_string= str_split(trim(fgets(STDIN)));

for ($i = 1; $i <= $m; $i++) {
    $from = 0;
    $to = 0;
    [$from, $to] = explode(' ', trim(fgets(STDIN)));

    $sSub = array_slice($S_string, $from -1, $to - $from + 1);
    $tSub = array_slice($T_string, $from -1, $to - $from + 1);

    array_splice($S_string, $from -1 , $to - $from +1, $tSub);
    array_splice($T_string, $from -1 , $to - $from +1, $sSub);
}

echo implode('', $S_string) . PHP_EOL;
