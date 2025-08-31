<?php

[$n] = array_map('intval', explode(" ", trim(fgets(STDIN))));
[$s] = explode(" ", trim(fgets(STDIN)));

// 文字列中のすべてのBの位置を記録する
$pos = [];
for ($i=0; $i<2*$n; $i++) {
    if ($s[$i] == "B") {
        $pos[] = $i;
    }
}

$ansAB = 0;
$ansBA = 0;
for ($i=0; $i<2*$n; $i++) {

    // 現在の位置iに対応するのは何番目のB?
    // 位置0または1のB・・・0番目のB
    // 位置2または3のB・・・1番目のB
    // 位置4または5のB・・・2番目のB
    $originPos = intdiv($i, 2); // 切り捨て

    // BABABA.. Bが偶数位置になるため総移動距離を計算する
    if ($i % 2 === 0) {
        $ansBA += abs($pos[$originPos]-$i);
    }
    // ABABAB.. Bが奇数位置になるための総移動距離を計算する
    if ($i % 2 == 1) {
        $ansAB += abs($pos[$originPos]-$i);
    }
}

echo min($ansAB, $ansBA);