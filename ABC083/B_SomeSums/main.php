<?php

$inputs = explode(' ', trim(fgets(STDIN)));

$value = (int) $inputs[0];
$min = (int) $inputs[1];
$max = (int) $inputs[2];

$total = 0;
for($i = 1; $i <= $value; $i++) {
    $sum = 0;
    $target = $i;
    // 各桁の和を求める
    // 10進数を10で割った余りで下一桁を取得できる
    while ($target > 0) {
        $sum += (int) $target % 10;
        $target = $target / 10;
    }

    if ($min <= $sum && $sum <= $max) {
        $total += $i;
    }
}
print_r($total);