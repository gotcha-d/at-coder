<?php

// 入力「A B」をそれぞれ変数a, bに代入する
[$from, $add] = array_map('intval', explode(' ', fgets(STDIN)));

if ($from + $add > 12) {
    echo (($from + $add)- 12) .PHP_EOL;
} else {
    echo $from + $add . PHP_EOL;
}

