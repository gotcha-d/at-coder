<?php

[$N, $A, $B] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$string = trim(fgets(STDIN));

echo substr($string, $A, $N - $A - $B);