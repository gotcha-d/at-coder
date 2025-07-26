<?php

$inputs = [];
// 0単独で入力されると、trim結果が0になりfalsy判定されてしまうので空文字判定でループを続行する
while (($line = trim(fgets(STDIN))) !== '') {
    $inputs[] = $line;
}

$count500 = (int) $inputs[0];
$count100 = (int) $inputs[1];
$count50 = (int) $inputs[2];
$target = (int) $inputs[3];

$result = 0;
// 五百円が1枚のとき..2枚の時。。
for ($i = 0; $i <= $count500; $i++) {
    $total = 0; // 1組み合わせ のときの合計金額
    for ($j = 0; $j <= $count100; $j++) {
        for ($k = 0; $k <= $count50; $k++) {
            $total = (500 * $i) + (100 * $j) + (50 * $k);
            if ($total == $target) {
                $result++;
            }
        }
    }
}

print_r($result);

