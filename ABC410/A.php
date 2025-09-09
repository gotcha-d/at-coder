<?php

$N = (int) trim(fgets(STDIN));
$races = array_map("intval", explode(" ", trim(fgets(STDIN))));
$k = (int) trim(fgets(STDIN));
$ans = 0;
for ($i = 0; $i < $N; $i++) {
    if ($k <= $races[$i]) {
        $ans++;
    }
}

echo $ans;