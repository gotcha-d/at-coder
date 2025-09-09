<?php

$T = (int) trim(fgets(STDIN));
$cases = [];
for ($i=0; $i < $T; $i++) {
    $cases[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

for ($j=0; $j < $T; $j++) {
    $a = $b = $c = $baseCombination = $others = 0;
    [$a, $b, $c] = $cases[$j];
    // echo "A:" . $a . " B:" . $b . " C:" . $c;
    // ACのペアはどのくらいできる？
    if ($a == 0 || $c == 0) {
        echo 0 . PHP_EOL;
        continue;
    }
    $baseCombination = min($a, $c);
    $others = ($a + $b + $c) - (2*$baseCombination);
    if ($baseCombination > $others) {

    } else {

    }
    if ($baseCombination < $others) {
        echo $baseCombination . PHP_EOL;
    } else {

    }
}

