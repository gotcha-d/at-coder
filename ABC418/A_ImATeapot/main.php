<?php

$n = intval(trim(fgets(STDIN)));
$string = trim(fgets((STDIN)));

$chars = str_split($string);

$suffix = array_slice($chars, -3, 3);
if (implode('', $suffix) == 'tea') {
    echo 'Yes';
} else {
    echo 'No';
}

