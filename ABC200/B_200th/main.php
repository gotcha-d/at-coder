<?php

[$n, $k] = array_map('intval', explode(' ', trim(fgets(STDIN))));

function concat200(int $target): int {
    return intval(strval($target) . "200");
}

for ($i = 1; $i <= $k; $i++) {
    if ($n % 200 == 0) {
        $n /= 200;
    } else {
        $n = concat200($n);
    }
}

echo $n;