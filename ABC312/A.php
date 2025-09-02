<?php

$array = ["ACE",  "ACE", "BDF", "CEG", "DFA", "EGB", "FAC", "GBD"];

$s = trim(fgets(STDIN));

if (in_array($s, $array)) {
    echo "Yes";
} else {
    echo "No";
}