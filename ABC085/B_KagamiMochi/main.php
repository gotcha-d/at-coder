<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = (int) $line;
}

$n = $inputs[0];
// バケットの作成
$bucket = [];
for ($i = 1; $i <= $n; $i++) {
    $diameter = $inputs[$i];
    if (isset($bucket[$diameter])) {
        $bucket[$diameter] += 1;
    } else {
        $bucket[$diameter] = 1;
    }
}
print_r(count($bucket) . PHP_EOL);