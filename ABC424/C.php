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

[$n] =  inputIntegers();
$completed = [];

$graph = []; // スキル→そのスキルで習得可能なスキル
for ($i = 1; $i <= $n; $i++) {
    [$a, $b] = inputIntegers();
    if ($a == 0 && $b == 0) {
        $completed[] = $i;
    } elseif ($a === $b) {
        $graph[$a][] = $i;
    } else {
        $graph[$a][] = $i;
        $graph[$b][] = $i;
    }
}

/**
 * 深さ優先探索
 *
 * @param [type] $graph
 * @param [type] $v
 * @return void
 */
function dfs($graph, $v) {
    global $seen;
    $seen[$v] = true;
    if (!isset($graph[$v])) {
        return;
    }
    foreach($graph[$v] as $nextV) {
        if (isset($seen[$nextV])) continue;
        dfs($graph, $nextV);
    }
}

$ans = 0;
if (count($completed) < 1) {
    printLn("0");
    exit;
}
foreach ($completed as $item) {
    dfs($graph, $item);
}

printLn(count($seen));

