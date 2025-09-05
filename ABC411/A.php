<?php

$P = trim(fgets(STDIN));
$L = (int) trim(fgets(STDIN));

if (strlen($P) >= $L) {
    echo "Yes";
} else {
    echo "No";
}