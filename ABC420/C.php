<?php

// 入力「A B」をそれぞれ変数a, bに代入する
[$N, $Q] = array_map('intval', explode(' ', fgets(STDIN)));

$aString = array_map('intval', explode(' ', trim(fgets(STDIN))));
$bString = array_map('intval', explode(' ', trim(fgets(STDIN))));

for ($i = 1; $i <= $Q; $i++) {
    [$type, $targetIndexRaw, $new] = explode(' ', fgets(STDIN));
    $targetIndex = $targetIndexRaw -1;
    if ($type == 'A') {
        $aString[$targetIndex] = (int) $new;
    } elseif ($type == 'B') {
        $bString[$targetIndex] = (int) $new;
    }
    $ans = 0;
    for ($j = 0; $j < $N; $j++) {
        $ans += min($aString[$j], $bString[$j]);
    }
    echo $ans .PHP_EOL;
}