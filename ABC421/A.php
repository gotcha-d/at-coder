<?php

$n = trim(fgets(STDIN));

$rooms = [];
for ($i=1; $i <= $n; $i++) {
    $rooms[$i] = trim(fgets(STDIN));
}

[$number, $name] = explode(' ', trim(fgets(STDIN)));

if ($rooms[$number] == $name) {
    echo "Yes";
} else {
    echo "No";
}
