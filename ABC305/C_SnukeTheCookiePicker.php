<?php

[$h, $w] = explode(' ', fgets(STDIN));

$boards = [];
for ($i = 0; $i < $h; $i++) {
    $boards[$i] = str_split(fgets(STDIN));
}

$u = INF; // #を含む行の最小の行番号
$d = -INF; // #を含む行の最大の行番号
$l = INF; // #を含む列の一番左の列番号
$r = -INF; // #を含む列の一番右の列番号

for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if ($boards[$i][$j] == "#") {

            if ($i < $u) {
                $u = $i;
            } elseif($i > $d) {
                $d = $i;
            }

            if ($j < $l) {
                $l = $j;
            } elseif ($j > $r) {
                $r = $j;
            }
        }
    }
}

for ($i = $u; $i <= $d; $i++) {
    for ($j = $l; $j <= $r; $j++) {
        if ($boards[$i][$j] == ".") {
            printf("%d %d", $i+1, $j+1);
        }
    }
}