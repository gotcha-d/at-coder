<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$S_string = str_split(trim(fgets(STDIN)));
$T_string= str_split(trim(fgets(STDIN)));

// いもす法による回答
// いもす法用の配列 最後の文字のフリップ判定のために文字列の長さは+1が必要
$ims = array_fill(0, $n+1, 0);

// 各クエリの範囲の開始と終了に細分を記録する
for ($i = 1; $i <= $m; $i++) {
    [$from, $to] = explode(' ', trim(fgets(STDIN)));

    // インデックスの位置を補正
    $from--;
    $to--;

    $ims[$from] += 1;
    $ims[$to+1] += -1;
}

// 累積和で実際の各位置での交換回数を計算
for ($i = 1; $i < $n; $i++) { // 最初の1項は累積和を計算する必要がないので、開始位置は1
    $ims[$i] += $ims[$i-1];
}

$ans = '';
for ($i =0; $i < $n; $i++) {
    if ($ims[$i] % 2 == 0) {
        // 反転回数が偶数ならS
        $ans .= $S_string[$i];
    } else {
        // 反転回数が奇数ならT
        $ans .= $T_string[$i];
    }
}

echo $ans;

