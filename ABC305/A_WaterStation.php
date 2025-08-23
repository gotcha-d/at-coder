<?php

$current = (int) trim(fgets(STDIN));

$pointList = [];
$point = 0;
while ($point <= 100) {
    $pointList[] = $point;
    $point += 5;
}

$answer = 100;
foreach ($pointList as $point) {
    if (abs($current - $point) < abs($current - $answer)) {
        $answer = $point;
    }
}

echo $answer;