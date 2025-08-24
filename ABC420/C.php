<?php

// 入力「A B」をそれぞれ変数a, bに代入する
[$N, $Q] = array_map('intval', explode(' ', fgets(STDIN)));

$aString = array_map('intval', explode(' ', trim(fgets(STDIN))));
$bString = array_map('intval', explode(' ', trim(fgets(STDIN))));

$min = 0;
for ($i = 0; $i < $N; $i++) {
    $min += min($aString[$i], $bString[$i]);
}

for ($i = 1; $i <= $Q; $i++) {
    [$type, $targetIndexRaw, $new] = explode(' ', fgets(STDIN));
    $targetIndex = $targetIndexRaw -1;
    $newVal = (int) $new;

    // 入れ替える対象となる和を減算（あとで値を入れ替えて再計算する）
    $min -= min($aString[$targetIndex], $bString[$targetIndex]);
    if ($type == 'A') {
        $aString[$targetIndex] = (int) $new;
    } elseif ($type == 'B') {
        $bString[$targetIndex] = (int) $new;
    }
    // 和を再計算
    $min += min($aString[$targetIndex], $bString[$targetIndex]);
    echo $min . PHP_EOL;
}