<?php

$S = trim(fgets(STDIN));
$blocks = str_split($S);

$ships = [];
for ($i = 0; $i < strlen($S); $i++) {

    if ($blocks[$i] === ".") continue;
    
    $ships[] = $i + 1;
    if (count($ships) == 2) {
        print_r(implode(",", $ships) . PHP_EOL);
        $ships = [];
    }
}