<?php

const BILL_10000 = 10000;
const BILL_5000 = 5000;
const BILL_1000 = 1000;

fscanf(STDIN, "%s %s", $billCount, $totalAmount);

for ($i = 0; $i <= $billCount; $i++) {
    for($j = 0; $j <= $billCount - $i; $j++) {
        // 10000円札と5000円札の枚数が分かれば1000円札の枚数も求まる
        $k = $billCount - $i - $j;
        $total = (BILL_10000 * $i) + (BILL_5000 * $j) + (BILL_1000 * $k);

        if ($total == $totalAmount) {
            printf("%d %d %d\n", $i, $j, $k);
            return;
        }
    }
}

print_r('-1 -1 -1' . PHP_EOL);