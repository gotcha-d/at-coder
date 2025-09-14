<?php

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


/**
 * 問題を置き換えよう
 * 1. Sのいくつかの"."を"o"に置き換える。
 * 2. "o"の間には"#"がある必要がある。
 *    → 連続する"."の中で、置き換えられる"o"は一つだけ
 *    → 仮に"..."の一番左を"o"に置換すると考えると、「"#."を"#o"に置換する」と考えることができる。
 * 3. 1,2の条件下でoを最大にする。
 */
$s = inputString();
$ans = str_replace("#.", "#o", "#". $s); // 1文字目の置換ができない（一番左に"..."があったとき）ため仮想的な#を付与
echo substr($ans, 1) . PHP_EOL;