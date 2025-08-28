<?php

[$length, $queryCnt] = explode(' ', trim(fgets(STDIN)));
$string = str_split(trim(fgets(STDIN)));

// "AC"が登場した累積和を求める
// i番目が"C" かつ i-1番目が"A"ならカウント
$sum[] = 0;
for ($i = 0; $i < $length; $i++) {
    if ($string[$i] == "C" && $string[$i-1] == "A") {
        $sum[] = $sum[$i] + 1;
    } else{
        $sum[] = $sum[$i];
    }
}

for ($i = 0; $i < $queryCnt; $i++) {
    [$from, $to] = explode(" ", trim(fgets(STDIN)));
    $ans = $sum[$to] - $sum[$from -1];
    if ($string[$from-1] == "C" && $string[$from-2] == "A") {
        $ans--;
    }
    echo $ans . PHP_EOL;
}
