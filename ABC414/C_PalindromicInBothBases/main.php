<?php

/**
 * a進数に変換したとき回文かどうかを判定する
 *
 * @param integer $target
 * @param integer $a
 * @return boolean
 */
function isPalindromicByInput(int $target, int $a) {
    // $converted = '';
    // $dividend = $target;
    // while ($dividend > 0) {
    //     $remainder = $dividend % $a;
    //     $dividend = floor ($dividend / $a);
    //     $converted = $converted . $remainder;
    // }
    $converted = base_convert($target, 10, $a);
    return $converted === strrev($converted);
}

/**
 * Undocumented function
 *
 * @param string $str 偶数桁の回文
 * @return void
 */
function toOdd(string $str) {
    $target = strlen($str) / 2; // 真ん中のどっちかを消せばいい。4文字なら2番目か3番目
    return substr_replace($str, '', $target, 1);
}

$inputs = [];
while ($input = trim(fgets(STDIN))) {
    $inputs[] = $input;
}

$a = (int)$inputs[0];
$n = (int)$inputs[1];

$ans = 0;
// Nは最大12桁の整数
// 回文を作るには、上半分（1/N桁）を作成して鏡合わせにすればよい。
// 10進数で回文　O(√10^12)
for ($i = 1; $i < 1E6; $i++) {
    $str = (string)$i;
    // 文字列を鏡合わせにして回文を生成。必ず偶数桁の数
    $reverse = strrev($str);

    $even = (int) ($str . $reverse);
    if ($even <= $n && isPalindromicByInput($even, $a)) {
        $ans += $even;
    }
    
    // 奇数桁に変換する
    $odd = (int) ($str . substr($reverse, 1));
    if ($odd <= $n && isPalindromicByInput($odd, $a)) {
        $ans += $odd;
    }
}

echo $ans.PHP_EOL;
