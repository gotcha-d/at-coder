<?php

// 下、右、上、左、右下、右上、左上、左下
const DX = [0, 1, 0, -1, 1, 1, -1, -1];
const DY = [1, 0, -1, 0, 1, -1, -1, 1];

// 周囲8マスの'#'の個数を数える
function check($y, $x, $maxHeight, $maxWidth, $strings) {
    $count = 0;
    for ($d = 0; $d < 8; $d++) {
        // マス(y, x)の周囲のマスを(ny, nx)とする
        $nx = $x + DX[$d];
        $ny = $y + DY[$d];

        // マス(ny, nx)が盤面外の場合はスキップ
        if ($nx < 0 || $nx >= $maxWidth || $ny < 0 || $ny >= $maxHeight) {
            continue;
        }

        if ($strings[$ny][$nx] == '#') {
            $count++;
        }
    }
    return $count;
}

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}
$height = (int) $inputs[0][0];
$width = (int) $inputs[0][1];
$strings = [];
for($i = 1; $i <= $height; $i++) {
    $strings[] = str_split($inputs[$i][0]);
}
for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        if ($strings[$i][$j] == '.') {
            $count = check($i, $j, $height, $width, $strings);
            $strings[$i][$j] = $count;
        }
    }
}

foreach($strings as $string) {
    print_r(implode($string). PHP_EOL);
}