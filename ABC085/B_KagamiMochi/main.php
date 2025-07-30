<?php

$n = trim(fgets(STDIN));
// バケットの作成
$bucket = [];
for ($i = 0; $i < $n; $i++) {
    $diameter = trim(fgets(STDIN));
    // バケットの更新
    $bucket[$diameter] = 1; // 今回の問題では、各種が何個ずつあるかは関係ないので1or0でいい
}

$sum = 0;
foreach ($bucket as $item) {
    $sum += $item;
}
print_r($sum . PHP_EOL);