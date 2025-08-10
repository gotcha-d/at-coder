<?php

function getPercentage($x, $t) {
    if (abs($t) < 3) {
        return 0;
    }
    return fdiv(($x-2), abs($t) - 2);
    
}

$input = trim(fgets(STDIN));
$chars = str_split($input);
$length = count($chars);

$maxPercentage = 0;
for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
        $nowLength = ($j - $i + 1);
        if ($chars[$i] != "t" || $chars[$j] != "t" || $nowLength < 3) {
            continue;
        }
        $count = 0;
        for ($k = $i + 1; $k < $j; $k++) {
            if ($chars[$k] == "t") {
                $count++;
            }
        }
        $now = $count / ($nowLength -2);
        $maxPercentage = max($maxPercentage, $now);
    }

}

echo $maxPercentage;