<?php

$input = trim(fgets(STDIN));

$length = strlen($input);
$chars = str_split($input);

$words = [];
for ($i=0; $i < $length;){
    $j = $i;
    $wordElements[] = $chars[$j];
    while ($j < $length && (count($wordElements) == 1 || !ctype_upper($chars[$j]))) {
        $j++;
        $wordElements[] = $chars[$j];
    }
    $words[] = implode("", $wordElements);
    $i = $j + 1;
    $wordElements = [];
}
natcasesort($words);
print_r(implode($words));