<?php

[$height, $width] = array_map('intval', explode(" ", trim(fgets(STDIN))));

function canPlace($board, $i, $j) {

    $offsets = [
        [0, 1],   // 右
        [1, 1],   // 右下
        [1, 0],   // 下
        [1, -1],  // 左下
        [0, -1],  // 左
        [-1, -1], // 左上
        [-1, 0],  // 上
        [-1, 1]   // 右上
    ];

    foreach ($offsets as $position) {
        $y = $position[0]; // y軸方向への補正
        $x = $position[1]; // x軸方向への補正

        if (isset($board[$i+$y][$j+$x]) && $board[$i+$y][$j+$x] == "#") {
            return false;
        }
    }

    return true;
}


$board = [];

// ボードの初期化
for ($i = 0; $i < $height; $i++) {
    $board[$i] = [];
    for ($j = 0; $j < $width; $j++) {
        $board[$i][$j] = ".";
    }
}

$result = 0;
for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        if (canPlace($board, $i, $j)) {
            $board[$i][$j] = "#";
            $result++;
        }
    }
}

echo $result ."\n";