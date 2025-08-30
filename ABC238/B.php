<?php

$n = trim(fgets(STDIN));
$query = array_map("intval", explode(" ", trim(fgets(STDIN))));

$angles = [360];
for ($i = 0; $i < $n; $i++) {
    // 分割したい角度
    $new = $query[$i];

    $sum = 0;
    $target = -1;
    while ($sum <= $new) {
        $k++;
        $sum += $angles[$k];
    }
    $new1 = $angles[$target] - $new;
    $new = $target - $query[$i];
    $angles[] = $query;
    $angles[] = $new;
}

print_r($angles);
