<?php

$input = trim(fgets(STDIN));

switch ($input) {
    case "red":
        echo "SSS\n";
        break;
    case "blue":
        echo "FFF\n";
        break;
    case "green":
        echo "MMM\n";
        break;
    default:
        echo "Unknown\n";
}
