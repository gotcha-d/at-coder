<?php

$days = (int) trim(fgets(STDIN));
$ans = 0;
for ($i = 0; $i < $days; $i++) {
    [$target, $done] = array_map('intval', explode(' ' , trim(fgets(STDIN))));
    if ($target < $done) {
        $ans++;
    }
}

echo $ans;