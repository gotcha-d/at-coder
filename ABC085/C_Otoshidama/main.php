<?php

const BILL_10000 = 10000;
const BILL_5000 = 5000;
const BILL_1000 = 1000;

function sum($a, $b, $c) {
    return $a + $b + $c;
}
fscanf(STDIN, "%s %s", $billCount, $totalAmount);

for ($i = 0; $i <= $billCount; $i++) {
    for($j = 0; $j <= $billCount; $j++) {
        for ($k = 0; $k <= $billCount; $k++) {
            $total = (BILL_10000 * $i) + (BILL_5000 * $j) + (BILL_1000 * $k);
            if (($total == $totalAmount) && sum($i, $j, $k) == $billCount) {
                printf("%d %d %d\n", $i, $j, $k);
                return;
            }
        }
    }
}

print_r('-1 -1 -1' . PHP_EOL);