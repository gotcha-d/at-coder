<?php

$inputs = [];
while ($line = trim(fgets(STDIN))) {
    $inputs[] = $line;
}

$testCaseCount = (int) $inputs[0];
for ($i = 1; $i < $testCaseCount * 2; $i += 2) {
    // 薬の種別
    $drugCount = $inputs[$i];
    // 文字列
    $str = str_split($inputs[$i + 1]);
    // 危険な状態は？
    $danger = [];
    foreach($str as $k => $char) {
        if ($char == "1") {
            $danger[] = $k + 1;
        }
    }
    // 薬の種別Nの中からN-1個を選ぶ組み合わせが、1つでも安全であれば調合可能
    $limit = 0;
    foreach($danger as $status) {
        $detail = (string) base_convert($status, 10, 2);
        if (preg_match("/0/", $detail) == 1) continue;
        $limit++;
    }

    if ($limit === $drugCount) {
        print_r("No" . PHP_EOL);
    } else {
        print_r("Yes" . PHP_EOL);
    }
}
