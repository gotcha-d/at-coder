<?php

$input = explode(' ', trim(fgets(STDIN)));


$vertexCount = $input[0]; // 頂点数
$sideCount = $input[1]; // 辺数
$queryCount = $input[2];

// mapの作成
// 頂点番号 -> [結ばれた集合の配列]
$graph = [];
// グラフを初期化
for ($i = 0; $i < $vertexCount; $i++) {
    $graph[$i] = [];
}

for ($i = 0; $i < $sideCount; $i++) {
    $line =explode(' ', trim(fgets(STDIN)));
    $u = intval($line[0]);
    $v = intVal($line[1]);

    // 各頂点を0始まりにする
    $u--;
    $v--;
    $graph[$u][] = $v;
    $graph[$v][] = $u;
}

$colors = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $i < $queryCount; $i++) {
    $query = explode(' ', trim(fgets(STDIN)));
    // 処理タイプ
    $type = $query[0];
    // 処理対象の頂点
    $x = intval($query[1]);

    // 頂点を0始まりにする
    $x--;
    echo $colors[$x] . PHP_EOL;

    if ($type == 1) {
        // スプリンクラー起動：隣接する全ての頂点を$xの色で塗り替え
        foreach ($graph[$x] as $vertex) {
            $colors[$vertex] = $colors[$x];
        }
    } else {
        // 色の上書き
        $colors[$x] = intval($query[2]);
    }
}