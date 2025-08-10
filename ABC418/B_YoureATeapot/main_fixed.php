<?php

$input = trim(fgets(STDIN));
$chars = str_split($input);
$length = count($chars);

$maxPercentage = 0;

// 全ての部分文字列を試す
for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
        // 両端が同じ文字の場合のみ処理
        if ($chars[$i] == $chars[$j]) {
            $candidate = implode(array_slice($chars, $i, $j - $i + 1));
            $targetChar = $chars[$i];
            $x = substr_count($candidate, $targetChar);
            $t = strlen($candidate);
            
            // 長さが3以上で、両端の文字が2個以上ある場合のみ計算
            if ($t >= 3 && $x >= 2) {
                $percentage = ($x - 2) / ($t - 2);
                $maxPercentage = max($maxPercentage, $percentage);
            }
        }
    }
}

// 結果を出力（小数点以下も含める場合）
echo $maxPercentage; 