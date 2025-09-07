<?php

[$h, $w] = explode(' ', trim(fgets(STDIN)));

$boards = [];
for ($i=0; $i < $h; $i++){ 
    $boards[] = str_split(trim(fgets(STDIN)));
}

$around = [
    // $i, $j
    [-1, 0],  // 上
    [0, 1],  // 右
    [1, 0],  // 下
    [0, -1],  // 左
];

for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        $count = 0;
        if ($boards[$i][$j] == "#") {
            foreach ($around as $target) {
                if (isset($boards[$i+$target[0]][$j+$target[1]]) && $boards[$i+$target[0]][$j+$target[1]] == "#") {
                    $count +=1;
                }
            }
            if ($count == 2 || $count==4) {
                $result = true;
            } else {
                // 2以外のものがあれば即中断
                echo "No";
                return;
            }
        }
    }
}

echo "Yes";