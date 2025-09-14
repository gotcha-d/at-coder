<?php

// 上下左右への移動（下、右、上、左）を定義
const DX = [1, 0, -1, 0]; //　縦軸
const DY = [0, 1, 0, -1]; // 横軸

/**
 * 文字列の入力を受け付ける
 *
 * @return string
 */
function inputString(): string
{
    return trim(fgets(STDIN));
}

/**
 * スペース区切りで入力された文字列を、各要素配列にして返す
 *
 * @return array
 */
function inputStringsArray(): array
{
    return explode(" ", trim(fgets(STDIN)));
}

/**
 * スペース区切りで入力された整数を、各要素配列にして返す
 *
 * @return array
 */
function inputIntegers(): array
{
    return array_map("intval", explode(" ", trim(fgets(STDIN))));
}

/**
 * 入力された文字列を1文字ずつの配列に分解する
 */
function inputStringSplit(): array
{
    return str_split(trim(fgets(STDIN)));
}

function makeKey($i, $j) {
    return $i . "-" . $j;
}

[$h, $w] = inputIntegers();
$board = [];
for ($i = 0; $i < $h; $i++) {
    $board[] = inputStringSplit();
}

// todoリスト（キュー）の各要素は、マス(x, y)を表すペアとする
$queue = [];
array_push($queue, [0, 0]);
$dist[0][0] = 0;

// 幅優先探索
while (!empty($queue)) {
    // todoリストから要素を取り出す
    [$x, $y] = array_shift($queue);
    
    // 上下左右の移動を順に繰り返す
    for ($dir = 0; $dir < 4; $dir++) {
        $x2 = $x + DX[$dir];
        $y2 = $y + DY[$dir];

        // 配列外参照はスキップ
        if ($x2 < 0 || $x2 >= $h || $y2 < 0 || $y2 >= $w) {
            continue;
        }
        // 黒は通行できないのでスキップ
        if ($board[$x2][$y2] == "#") {
            continue;
        }
        // 探索済みもスキップ
        if (isset($dist[$x2][$y2])) {
            continue;
        }

        // 隣接するマスをtodoリストに追加
        array_push($queue, [$x2, $y2]);
        // 経路表に追加
        $dist[$x2][$y2] = $dist[$x][$y] + 1;
    }
}

// 最短で右下に到達するための経路長
// print_r($dist[$h-1][$w-1]);
$initBlackCnt = 0;
for ($i =0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if ($board[$i][$j] == "#") {
            $initBlackCnt++;
        }
    }
}
if (isset($dist[$h-1][$w-1])) {
    echo ($h * $w) - ($dist[$h-1][$w-1] + 1) - $initBlackCnt. PHP_EOL;
} else {
    echo -1;
}