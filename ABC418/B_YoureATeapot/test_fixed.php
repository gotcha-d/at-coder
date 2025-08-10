<?php

function testFillRate($inputString) {
    echo "=== テスト: '$inputString' ===\n";
    
    $input = $inputString;
    $length = strlen($input);
    $maxFillRate = 0;
    
    // 全ての部分文字列を検証
    for ($i = 0; $i < $length; $i++) {
        for ($j = $i + 2; $j < $length; $j++) { // 長さ3以上のため j は i+2 から開始
            // 先頭と末尾が同じ文字の場合のみ処理
            if ($input[$i] == $input[$j]) {
                $substring = substr($input, $i, $j - $i + 1);
                $substringLength = strlen($substring);
                $targetChar = $input[$i];
                $charCount = substr_count($substring, $targetChar);
                
                echo "部分文字列: '$substring' (長さ: $substringLength, 文字'$targetChar'の個数: $charCount)\n";
                
                // 長さが3以上で、対象文字が2個以上ある場合のみ計算
                if ($substringLength >= 3 && $charCount >= 2) {
                    // 正しい充填率の計算式: (|t| - 2) / (x - 2)
                    $fillRate = ($substringLength - 2) / ($charCount - 2);
                    echo "  → 充填率: ($substringLength - 2) / ($charCount - 2) = $fillRate\n";
                    $maxFillRate = max($maxFillRate, $fillRate);
                }
            }
        }
    }
    
    echo "最大充填率: $maxFillRate\n\n";
    return $maxFillRate;
}

// テストケース
testFillRate("ababa");
testFillRate("aabaa");
testFillRate("abcba");
testFillRate("aaaa"); 