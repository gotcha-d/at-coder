<?php

$input = trim(fgets(STDIN));

$length = strlen($input);
$chars = str_split($input);

$words = [];
// 文字列Sを単語ごとに分割する iは常に単語先頭の大文字を指す
for ($i=0; $i < $length;){
    // 初めてS[j]が大文字になるjを見つける
    $j = $i + 1;
    while ($j < $length && ctype_lower($chars[$j])) {
        $j++;
    }
    // 単語を切り出す
    $wordElements = array_slice($chars, $i, ($j - $i + 1));
    $words[] = implode("", $wordElements);
    $i = $j + 1;
}
natcasesort($words);
print_r(implode($words));