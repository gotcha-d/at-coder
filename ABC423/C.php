<?php

// 上下左右への移動（下、右、上、左）を定義
const DY = [1, 0, -1, 0];
const DX = [0, 1, 0, -1];

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

[$n, $currentIdx] = inputIntegers();
$locks = explode(" ", trim(fgets((STDIN))));

// // 自分より左側
for ($i=0; $i < $currentIdx; $i++) {
    if ($locks[$i] == 0) {
        $l = $i;
        break;
    }
}
for ($i=$n-1; $i >= $currentIdx; $i--) {
    if ($locks[$i] == 0) {
        $r = $i;
        break;
    }
}
// echo "L: ". $1l;
// echo "R: ". $r;

$left = ($l != -1) ? implode(array_slice($locks, $l, $currentIdx-$l)) : implode(array_slice($locks, 0, $currentIdx));
// echo "L" . $left .PHP_EOL;
$right = ($r != -1)?
    implode(array_slice($locks, $currentIdx, $r - $currentIdx + 1))
    : implode(array_slice($locks, $currentIdx, $n - $currentIdx));
    $leftCont = strlen($left) +substr_count($left, "1");
// echo "R" . $right . PHP_EOL;
// echo $leftCont . PHP_EOL;
$rightCont = strlen($right) +substr_count($right, "1");
// echo $rightCont . PHP_EOL;
echo $leftCont + $rightCont;
