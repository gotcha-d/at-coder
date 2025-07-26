<?php

function check($y, $x, $maxHeight, $maxWidth, $strings) {
    $count = 0;
    for ($i = -1; $i <= 1; $i++) {
        for ($j = -1; $j <= 1; $j++) {
            if (($y+$i < 0 || $y + $i > $maxHeight) || ($x+$j < 0 || $x+$j > $maxWidth)) {
                continue;
            }
            if ($strings[$y+$i][$x+$j] == "#") {
                $count++;
            }
        }
    }
    return $count;
}

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = explode(' ', $line);
}
$height = (int) $inputs[0][0];
$width = (int) $inputs[0][1];
$strings = [];
for($i = 1; $i <= $height; $i++) {
    $strings[] = str_split($inputs[$i][0]);
}
for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < $width; $j++) {
        if ($strings[$i][$j] == '.') {
            $count = check($i, $j, $height -1, $width - 1, $strings);
            $strings[$i][$j] = $count;
        }
    }
}

foreach($strings as $string) {
    print_r(implode($string). PHP_EOL);
}