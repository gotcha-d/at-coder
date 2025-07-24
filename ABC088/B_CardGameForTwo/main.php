<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}

$cardCount = $inputs[0][0];
$cards = array_map(fn($val) => (int) $val, $inputs[1]);
arsort($cards);

$alice = 0;
$bob = 0;

$turn = 1;
while ($cardCount > 0) {
    // 昇順にソート
    if ($turn %  2 == 1) {
        // array_shiftで配列の先頭を取得しつつ、配列から削除する
        $alice += array_shift($cards);
    } elseif ($turn % 2=== 0){
        $bob += array_shift($cards);
    }
    $turn++;
    $cardCount--;
}

print_r(($alice - $bob));