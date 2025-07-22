<?php

function isEven(int $value) {
    return $value % 2 === 0;
}
$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(" ", $line);
}

$length = (int) $inputs[0][0];
$numbers = array_map(fn($value) => (int) $value, $inputs[1]);
$counter = 0;

// 操作が行えなくなるまで操作を行う
while (true) {
    // 操作が行えるか判定を行う
    $canContinue = true;
    for ($i = 0; $i < $length; $i++) {
        if (isEven($numbers[$i]) === false) {
            $canContinue = false;
            break;
        }
    }

    // 操作が行えない場合反復を中断する
    if (!$canContinue) {
        break;
    }

    // 操作が行える場合は操作する
    $numbers = array_map(fn($value) => $value / 2, $numbers);
    $counter++;
}
print_r($counter);