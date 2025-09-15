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

$n = inputString();
$locks = explode(" ", trim(fgets((STDIN))));

$l = -1;
for ($i = 0; $i < $n; $i++) {
    if ($locks[$i] == 1)  {
        $l = $i;
        break;
    }
}
$r = -1;
for ($i = $n -1; $i >= 0; $i--) {
    if ($locks[$i] == 1)  {
        $r = $i;break;
    }
}
// echo "L:" . $l;
// echo "R:" . $r;

if ($l == $r) {
    echo 0;
} else {
    echo $r - $l;
}