<?php

// 入力「A B」をそれぞれ変数a, bに代入する
[$memberCount, $voteCount] = array_map('intval', explode(' ', fgets(STDIN)));

$boards = [];
for ($i = 1; $i <= $memberCount; $i++) {
    $boards[$i] = str_split(trim(fgets(STDIN)));
}

// $swaps = [];
// for 
// for ($i = 0; $i < count($boards[0]); $i++) {
//     foreach ($boards as $value) {
//         $swaps[$i][] = $value[$i];
//     }
// }

// 合計点数
$pointArray = [];
for($i = 1; $i <= $memberCount; $i++) {
    $pointArray[$i] = 0;
}

$voteIndex = 0;
while ($voteIndex < $voteCount) {
    $countArray = [
        '0' => [],
        '1' => []
    ];
    foreach ($boards as $memberId => $voteArray) {
        if ($voteArray[$voteIndex] == 1) {
            $countArray['1'][] = $memberId;
        } else {
            $countArray['0'][] = $memberId;
        }
    }

    if (count($countArray['0']) ==0 || count($countArray['1']) == 0) {
        foreach($pointArray as $memberId => $memberPont) {
            $pointArray[$memberId] += 1;
        }
    } elseif (count($countArray['0']) < count($countArray['1'])) {
        foreach ($countArray['0'] as $choseMemberId) {
            $pointArray[$choseMemberId] += 1;
        }
    } elseif (count($countArray['0']) > count($countArray['1'])) {
        foreach ($countArray['1'] as $choseMemberId) {
            $pointArray[$choseMemberId] += 1;
        }
    }
    $voteIndex++;
}

// print_r($pointArray);
// ポイントの照準でソート
$maxPoint = max($pointArray);
$ans = [];
foreach($pointArray as $memberId =>  $memberPoint) {
    if ($maxPoint == $memberPoint) {
        $ans[] = $memberId;
    }
}
echo implode(' ', $ans);