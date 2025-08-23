<?php

[$p, $q] = explode(' ', trim(fgets(STDIN)));

// Aを0, Bを1, Cを2..に変換する常套手段
$p_index = ord($p) - ord('A');
$q_index = ord($q) - ord('A');

$sides = [3, 1, 4, 1, 5, 9];

$from = min($p_index, $q_index);
$to = max($p_index, $q_index);

$answer = 0;
for ($i = $from; $i < $to; $i++) {
    $answer += $sides[$i];
}

echo $answer . PHP_EOL;