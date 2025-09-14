<?php

[$n, $l, $r] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$s = str_split(trim(fgets(STDIN)));

$ans = "Yes";
for ($i = $l-1; $i < $r; $i++) {
    if ($s[$i] != "o") {
        $ans = "No";
        exit;
    }
}
echo $ans . PHP_EOL;