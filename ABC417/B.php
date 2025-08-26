<?php

[$N, $M] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$arrA = explode(' ', trim(fgets(STDIN)));
$arrB = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $i < $M; $i++) {
    for($j= 0; $j < $N; $j++) {
        if (isset($arrA[$j]) && $arrB[$i] == $arrA[$j]) {
            array_splice($arrA, $j, 1);
            break;
        }
    }
}

echo implode(' ', $arrA);