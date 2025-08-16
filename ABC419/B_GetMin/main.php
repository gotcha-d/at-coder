<?php

$queryCount = intval(trim(fgets(STDIN)));

$arrVal = [];
for ($i = 1; $i <=$queryCount; $i++) {
    $query = explode(' ', trim(fgets(STDIN)));
    $type = $query[0];
    if ($type == 1) {
        $arrVal[] = (int) $query[1];
    } else {
        // 最小値を出力
        echo min($arrVal) . PHP_EOL;
        // 最小値のキーを取得。最小値が複数他あった時のために最もキーが若いものを取得する
        $minKey = array_keys($arrVal, min($arrVal))[0];
        // 配列から場外する
        array_splice($arrVal, $minKey, 1);
    }
}