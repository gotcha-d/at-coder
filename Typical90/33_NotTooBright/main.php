<?php

[$height, $width] = array_map('intval', explode(" ", trim(fgets(STDIN))));

if ($height == 1 || $width == 1 ) {
    // コーナーケース
    $result = $height * $width;
} else {
    // i, j 両方奇数の位置に配置させるのが最適
    $result = (intdiv($height +1, 2)) * (intdiv($width + 1, 2));
}
echo $result . PHP_EOL;