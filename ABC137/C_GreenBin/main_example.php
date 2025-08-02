<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = $line;
}

$n = (int) $inputs[0];
// 文字列Sのグループわけ
$bucket = [];
for ($i = 1; $i <= $n; $i++) {
    // 文字列を配列に分解してソートする
    $chars = str_split($inputs[$i]);
    sort($chars);
    // グループに追加
    $sortedChars = implode("", $chars);
    $bucket[$sortedChars] = isset($bucket[$sortedChars]) ? $bucket[$sortedChars] + 1 : 1;
}

// 1グループずつ精査
$result = 0;
foreach ($bucket as $item){
    // 組み合わせの公式
    // 各グループ内の文字列の中から2個選ぶ場合の数
    $combination = ($item * ($item - 1)) /2;
    $result += $combination;
}
print_r($result);