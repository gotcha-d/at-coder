<?php

[$x, $y] = explode(' ', trim(fgets(STDIN)));

function reverse($num) {
    return intval(strrev($num));
}

$arr[1] = $x;
$arr[2] = $y;
for ($i=3; $i <= 10; $i++) {
    $old1 = $arr[$i-1]; // 2番目
    $old2 = $arr[$i-2]; // 1番目
    $arr[$i] = reverse($old1 + $old2);
}
echo $arr[10];
