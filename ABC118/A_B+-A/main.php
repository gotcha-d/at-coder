<?php

[$A_divides, $B_divided] = array_map(
    'intVal',
    explode(' ', trim(fgets(STDIN)))
);

if ($A_divides != 0 && $B_divided % $A_divides == 0) {
    echo $A_divides + $B_divided;
} else {
    echo $B_divided - $A_divides;
}

