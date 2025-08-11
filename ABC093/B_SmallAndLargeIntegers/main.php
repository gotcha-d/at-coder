<?php

[$a, $b, $k] = array_map('intval', explode(' ', trim(fgets(STDIN))));

$outputs = [];

// for ($i = $a; $i <= $b; $i++) {
// 出力する範囲を指定する
for ($i = $a; $i <= min($b, $a + $k -1); $i++) {
    $outputs[] = $i;
}

// for ($i = $b; $i >= $a; $i--) {
for ($i = max($a, $b - $k + 1); $i <= $b; $i++) {
    $outputs[] = $i;
}

$merged = array_unique($outputs);
sort($merged);
foreach ($merged as $number) {
    echo $number . PHP_EOL;
}