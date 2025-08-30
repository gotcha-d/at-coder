<?php

$n = trim(fgets(STDIN));

// 入力「A B」をそれぞれ変数a, bに代入する
[$a, $b] = explode(' ', fgets(STDIN));
[$a, $b] = array_map('intval', explode(' ', fgets(STDIN)));

// 盤の作成
$boards = [];
for ($i = 0; $i < $h; $i++) {
    $boards[$i] = str_split(fgets(STDIN));
}