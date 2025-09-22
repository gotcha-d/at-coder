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

[$n] = inputIntegers();

$results = [];
for ($i = 0; $i < $n; $i++) {
    [$c, $p] = inputIntegers();
    $results[$i] = [$c, $p];
}
// print_r($results);

// s[$c][$v] は、配列resultsの先頭Aからv個分の総和。$cはクラスごとにわけたもの
// 累積和の1番目の要素は、配列resultsの先頭一個分の総和のこと
$s = [
    1 => [
        0 => 0
    ],
    2 => [
        0 => 0
    ]
];
for ($i = 0; $i < $n; $i++) {
    [$class, $score] = $results[$i];
    if ($class == 1) {
        $s[1][$i+1] = $s[1][$i] + $score;
        $s[2][$i+1] = $s[2][$i];
    } else {
        $s[1][$i+1] = $s[1][$i];
        $s[2][$i+1] = $s[2][$i] + $score;
    }
}
// print_r($s);

[$q] = inputIntegers();
for ($i = 0; $i < $q; $i++) {
    [$a, $b] = inputIntegers();
    $sum1 = $s[1][$b] - $s[1][$a-1];
    $sum2 = $s[2][$b] - $s[2][$a-1];
    printf("%d %d\n", $sum1, $sum2);
}

