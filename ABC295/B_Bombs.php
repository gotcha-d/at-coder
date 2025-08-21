<?php

function calcDistance($point1_i, $point1_j, $point2_i, $point2_j) {
    return abs($point2_i - $point1_i) + abs($point2_j - $point1_j);
}

[$r, $c] = explode(" ", trim(fgets(STDIN)));
$boards = [];
while ($line = trim(fgets(STDIN))) {
    $boards[] = str_split($line);
}

for ($i = 0; $i < $r; $i++) {
    for($j = 0; $j <$c; $j++) {
        if (is_numeric($boards[$i][$j])) {
            $power = intval($boards[$i][$j]);
            // 自分を中心に 2n+1 × 2n+1 を走査する
            for ($k= $i - $power; $k <= $i + $power; $k++) {
                for ($l = $j - $power; $l <= $j + $power; $l++) {
                    // 存在しないマス/自分以外の爆弾マスはスキップ
                    if ((!isset($boards[$k]) || !isset($boards[$k][$l])) || (!($k == $i && $l == $j) && is_numeric($boards[$k][$l]))) {
                        continue;
                    }
                    $distance = calcDistance($i, $j, $k, $l);
                    if (isset($boards[$k][$l]) && $distance <= $power) {
                        $boards[$k][$l] = ".";
                    }
                }
            }

        }
    }
}


foreach ($boards as $line) {
    echo implode("", $line) . PHP_EOL;
}