<?php

$amount = 100;
$target = (int) trim(fgets(STDIN));

$year = 0;
while ($target > $amount) {
    // $amount += floor($amount * 0.01); これではだめ
    $amount += intdiv($amount, 100);
    $year++;
}

echo $year . PHP_EOL;

// 浮動小数点の誤差問題
// echo floor((0.1+0.7)*10); // 8を期待するが、結果は7
// 内部的には7.9999999999999991118...となっているから。