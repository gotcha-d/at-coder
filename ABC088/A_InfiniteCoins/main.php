<?php

$target = intval(trim(fgets(STDIN)));
$count1Coins = trim(fgets(STDIN));

$remainder = $target % 500;
if ($remainder <= $count1Coins) {
    echo "Yes";
} else {
    echo "No";
}
