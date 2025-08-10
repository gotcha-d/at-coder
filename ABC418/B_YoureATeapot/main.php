<?php

function getPercentage($x, $t) {
    if (abs($t) < 3) {
        return 0;
    }
    // return ($x-2)/(abs($t) - 2);
    return fdiv(($x-2), abs($t) - 2);
    
}

$input = trim(fgets(STDIN));
$chars = str_split($input);
$length = count($chars);

$maxPercentage = 0;
for ($i = 0; $i < $length; $i++) {
    $t = $chars[$i];
    $maxIndex = $i;
    for ($j = $i+1; $j < $length; $j++) {
        // tと囲まれている最長のインデックスまで走査
        if ($t == $chars[$j]) {
            $maxIndex = $j;
        }
    }

    // 同じ文字がなければ検証対象外
    if ($i ==  $maxIndex) {
        continue;
    }

    $candidate = implode(array_slice($chars, $i, $maxIndex - $i +1));
    $targetChar = $chars[$i];
    $x = substr_count($candidate, $targetChar);
    $t = strlen($candidate);

    // 長さが3以上で、両端の文字が2個以上ある場合のみ計算
    if ($t >= 3 && $x >= 2) {
        $percentage = ($x - 2) / ($t - 2);
        $maxPercentage = max($maxPercentage, $percentage);
    }
}

echo $maxPercentage;