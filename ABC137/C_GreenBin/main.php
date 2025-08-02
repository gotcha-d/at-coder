<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = $line;
}

$n = (int) $inputs[0];
$result = 0;
$buckets = [];
for ($i = 1; $i <= $n; $i++) {
    // 文字列を配列に分解する
    $chars = str_split($inputs[$i]);
    
    // 各文字が何文字ずつあるか計算する
    $buckets[$i] = [];
    foreach ($chars as $char) {
        if (isset($buckets[$i][$char])) {
            $buckets[$i][$char]++;
        } else {
            $buckets[$i][$char] = 1;
        }
    }

    // キーの照準でソートする
    ksort($buckets[$i]);
    // ここまでの集計のなかで、アナグラムがあるかチェックする
    for ($j = 1; $j < $i; $j++) {
        if (count(array_diff_assoc($buckets[$i], $buckets[$j])) == 0) {
            $result++;
            break;
        }
    }
}

print_r($result);