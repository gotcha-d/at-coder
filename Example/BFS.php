<?php

// グラフGに対して、頂点sを始点とした幅優先探索を行う
// 戻り値・・・各頂点への頂点sからの最短郷里を表す配列dist
function bfs(array $G, int $s) {

    // ステップ0
    // todoリストを表すキュー
    $queue = [];
    // dist[$v]は、始点sから頂点vへの最短経路長
    $dist = [];
    // 最初に始点sをtodoリストにセットする
    $dist[$s] = 0;
    array_push($queue, $s);

    // todoリストが空になるまで探索する
    while (!empty($queue)) {
        // todoリストから頂点を1つ取り出す
        $v = array_shift($queue);
        // 頂点vに隣接する頂点を探索
        foreach ($G[$v] as $v2) {

            // 既に探索済みならスキップ
            if (isset($dist[$v2])) {
                continue;
            }

            // 未探索なら探索
            // todoリストに追加
            array_push($queue, $v2);
            // v2のdistの値を更新
            $dist[$v2] = $dist[$v] + 1;
        }

    }
    
    return $dist;
}

$g = [
    0 => [1, 4, 2],
    1 => [0, 4, 3, 7],
    2 => [0, 6],
    3 => [1, 7, 5],
    4 => [0, 1, 7],
    5 => [3, 6],
    6 => [2, 7, 5],
    7 => [1, 3, 4, 6]
];
print_r(bfs($g, 0));