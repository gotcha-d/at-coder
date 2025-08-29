<?php

[$n, $s, $m, $l] = array_map('intval', explode(' ', fgets(STDIN)));

$maxS = ceil($n / 6);
$maxM = ceil($n / 8);
$maxL = ceil($n / 12);

$ans = INF;
for ($i = 0; $i <= $maxS; $i++) {
    for ($j = 0; $j <= $maxM; $j++) {
        for ($k = 0; $k <= $maxL; $k++) {
            if ((($i*6)+($j*8)+($k*12)) < $n) {
                continue;
            }
            $totalAmount = ($i*$s) + ($j*$m) + ($k*$l);
            if ($ans > $totalAmount) {
                $ans = $totalAmount;
            }
        }
    }
}

echo $ans;