<?php

function getPercentage($x, $t) {
    if (abs($t) < 3) {
        return 0;
    }
    return fdiv(($x-2), abs($t) - 2);
}

// テストケース
$input = "ababa";
$chars = str_split($input);
$length = count($chars);

echo "=== 元のコード ===\n";
$maxPercentage1 = 0;
for ($i = 0; $i < $length; $i++) {
    $t = $chars[$i];
    $maxIndex = $i;
    for ($j = $i+1; $j < $length; $j++) {
        if ($t == $chars[$j]) {
            $maxIndex = $j;
        }
    }

    if ($i ==  $maxIndex) {
        continue;
    }

    $candidate = implode(array_slice($chars, $i, $maxIndex - $i +1));
    $x = substr_count($candidate, $t);
    echo "文字: $t, 開始: $i, 終了: $maxIndex, 候補: $candidate, カウント: $x\n";
    
    $maxPercentage1 = max(
        $maxPercentage1,
        getPercentage($x, strlen($candidate))
    );
}
echo "結果1: $maxPercentage1\n\n";

echo "=== 修正版 ===\n";
$maxPercentage2 = 0;
for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
        if ($chars[$i] == $chars[$j]) {
            $candidate = implode(array_slice($chars, $i, $j - $i + 1));
            $targetChar = $chars[$i];
            $x = substr_count($candidate, $targetChar);
            $t = strlen($candidate);
            
            echo "文字: $targetChar, 開始: $i, 終了: $j, 候補: $candidate, カウント: $x\n";
            
            if ($t >= 3 && $x >= 2) {
                $percentage = ($x - 2) / ($t - 2);
                $maxPercentage2 = max($maxPercentage2, $percentage);
            }
        }
    }
}
echo "結果2: $maxPercentage2\n"; 