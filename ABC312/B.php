<?php

[$n, $m] = array_map('intval', explode(' ', fgets(STDIN)));
// 盤の作成
$boards = [];
for ($i = 0; $i < $n; $i++) {
    $boards[$i] = str_split(fgets(STDIN));
}

for ($i = 0; $i < $n-8; $i++) {
    for ($j = 0; $j < $m-8; $j++) {
        if ($boards[$i][$j] == "#" // 左上
            && $boards[$i][$j+1] == "#"
            && $boards[$i][$j+2] == "#"
            && $boards[$i][$j+3] == "."
            && $boards[$i+1][$j] == "#"
            && $boards[$i+1][$j+1] == "#"
            && $boards[$i+1][$j+2] == "#"
            && $boards[$i+1][$j+3] == "."
            && $boards[$i+2][$j] == "#"
            && $boards[$i+2][$j+1] == "#"
            && $boards[$i+2][$j+2] == "#"
            && $boards[$i+2][$j+3] == "."
            && $boards[$i+3][$j] == "."
            && $boards[$i+3][$j+1] == "."
            && $boards[$i+3][$j+2] == "."
            && $boards[$i+3][$j+3] == "."

            && $boards[$i+8][$j+5] == "." // 右下
            && $boards[$i+8][$j+6] == "#" // 右下
            && $boards[$i+8][$j+7] == "#"
            && $boards[$i+8][$j+8] == "#"
            && $boards[$i+7][$j+5] == "."
            && $boards[$i+7][$j+6] == "#"
            && $boards[$i+7][$j+7] == "#"
            && $boards[$i+7][$j+8] == "#"
            && $boards[$i+6][$j+5] == "."
            && $boards[$i+6][$j+6] == "#"
            && $boards[$i+6][$j+7] == "#"
            && $boards[$i+6][$j+8] == "#"
            && $boards[$i+5][$j+8] == "."
            && $boards[$i+5][$j+7] == "."
            && $boards[$i+5][$j+6] == "."
            && $boards[$i+5][$j+5] == "."
        ) {
            printf("%d %d\n", $i+1, $j+1);
        }
    }
}