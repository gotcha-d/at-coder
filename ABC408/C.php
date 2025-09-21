<?php

// 上下左右への移動（下、右、上、左）を定義
const DY = [1, 0, -1, 0];
const DX = [0, 1, 0, -1];

function printLn($arg): void
{
    echo $arg.PHP_EOL;
}


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

[$n, $m] = inputIntegers();
// 城壁の初期配列
$wall = array_fill(1, $n+1, 0);

// いもす
for ($i = 0; $i < $m; $i++) {
    [$l, $r] = inputIntegers();
    $wall[$l] += 1;
    $wall[$r+1] -= 1;
}
for ($i = 1; $i <= $n; $i++) {
    $wall[$i+1] += $wall[$i];
}
// print_r($wall);
printLn(min(array_slice($wall, 0, $n)));