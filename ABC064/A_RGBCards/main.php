<?php

[$red, $blue, $green] = array_map('intval', explode(' ', trim(fgets(STDIN))));

$tester = $red * 100 + $blue * 10 + $green;

echo $tester % 4 == 0 ? "YES" : "NO";