<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}

$cardCount = $inputs[0][0];
$cards = array_map(fn($val) => (int) $val, $inputs[1]);

// arsort, asortはキーと値の関係を維持するので不適。
// キーと値の維持は不要なのでsortを使う
rsort($cards);

// Aliceのときは加算、Bobのときは減産すれば良い
$result = 0;
// 配列の0番目はAlice, 1番目はBob
for ($i = 0; $i < $cardCount; $i++) {
    if ($i % 2 == 0) {
        $result += $cards[$i];
    } else {
        $result -= $cards[$i];
    }
}

print_r($result);