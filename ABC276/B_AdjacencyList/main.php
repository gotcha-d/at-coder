<?php

[$n_cityCount, $m_slideCount] = array_map('intval', explode(' ', trim(fgets(STDIN))));

$graph = [];
for ($i = 1; $i <= $m_slideCount; $i++) {
    [$a, $b] = explode(' ', trim(fgets(STDIN)));

    if (!isset($graph[$a])) {
        $graph[$a] = [];
    }
    if (!isset($graph[$b])) {
        $graph[$b] = [];
    }
    $graph[$a][] = $b;
    $graph[$b][] = $a;
}

// キー順にソート
// sort($graph);

for ($i = 1; $i <= $n_cityCount; $i++) {
    $connection = 0;
    $connectionString = '';
    
    if (isset($graph[$i])) {
        $connection = count($graph[$i]);
        sort($graph[$i]);
        $connectionString = implode(" ", $graph[$i]);
    }
    printf("%d %s\n", $connection, $connectionString);
}
