<?php

[$world, $stage] = explode('-', trim(fgets(STDIN)));

$next=false;
for ($i=1; $i <= 8; $i++) {
    for ($j=1; $j<= 8; $j++) {
        if ($next) {
            printf("%d-%d\n", $i, $j);
            return;
        }
        if ($i == $world && $j == $stage) {
            $next = true;
        }
    }
}