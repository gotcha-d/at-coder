<?php

[$n, $q] = array_map("intval", explode(" ", trim(fgets(STDIN))));
$queries = array_map("intval", explode(" ", trim(fgets(STDIN))));

$line = array_fill(1, $n, "0");
$ans = 0;
for ($i=1; $i <= $q; $i++) {
    $target = $queries[$i-1];
    $old = $line[$target];
    if ($old == "0") {
        $new = "1";
    } else {
        $new = "0";
    }
    $line[$target] = $new;

    if ($target == 1 && $target == $n) {
        if ($new == "1") {
            $ans +=1;
        } else {
            $ans -=1;
        }
        echo $ans . PHP_EOL;
        continue;
    }

    // 端っこのとき
    if ($target ==  1) {
        if ($new == "1") {
            if ($line[$target+1] == "0") {
                $ans +=1;
            }
        } else {
            if ($line[$target+1] == "0") {
                $ans -=1;
            }
        }
        echo $ans . PHP_EOL;
        continue;
    }

    if ($target == $n) {
        if ($new == "1") {
            if ($line[$target-1] == "0") {
                $ans +=1;
            }
        } else {
            if ($line[$target-1] == "0") {
                $ans -=1;
            }
        }
        echo $ans . PHP_EOL;
        continue;
    }

    // 端っこじゃないとき
    if ($new == $line[$target-1] && $new == $line[$target+1]) {
        // 前後のマスが反転しようとしている色と同じとき、区間は1減る
        // 白黒白 → 白白白、黒白黒 → 黒黒黒
        $ans -=1;
    } elseif (($new == $line[$target-1] && $new != $line[$target+1]) || $new != $line[$target-1] && $new == $line[$target+1]) {
        // 前後一方のマスが反転しようとしている色と同じとき、区間は変わらない
    } elseif ($new != $line[$target-1] && $new != $line[$target+1]) {
        // 前後のマスが反転しようとしている色と異なるとき、区間は1増える
        // 白白白 → 白黒白、黒黒黒 → 黒白黒
        $ans +=1;
    }
    
    echo $ans . PHP_EOL;
}