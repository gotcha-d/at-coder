<?php

$n = trim(fgets(STDIN));
$abString = str_split(trim(fgets(STDIN)));

$ans = 0;

while (implode($abString) != str_repeat("AB", $n) && implode($abString) != str_repeat("BA", $n)) {
    for ($i = 2; $i <= 2*$n;) {
        if ($abString[$i-2] == "A" && $abString[$i-1] == "A" && $abString[$i] == "B") {
            $abString[$i-1] = "B";
            $abString[$i] = "A";
            $ans++;
            break;
        } elseif ($abString[$i-2] == "B" && $abString[$i-1] == "B" && $abString[$i] == "A") {
            $abString[$i-1] = "A";
            $abString[$i] = "B";
            $ans++;
            break;
        } else {
            $i++;
        }
        echo implode($abString) . PHP_EOL;
    }
}

// while (i {
//     for ($i = 2; $i <= 2*$n;) {
//         if (implode($abString) != str_repeat("AB", $n) && implode($abString) != str_repeat("BA", $n)) {
//             break;
//         }
//         if ($abString[$i-2] == "A" && $abString[$i-1] == "A" && $abString[$i] == "B") {
//             $abString[$i-1] = "B";
//             $abString[$i-1] = "A";
//             $ans++;
//             $i += 3;
//         } elseif ($abString[$i-2] == "B" && $abString[$i-1] == "B" && $abString[$i] == "A") {
//             $abString[$i-1] = "A";
//             $abString[$i-1] = "B";
//             $ans++;
//             $i += 3;
//         } else {
//             $i++;
//         }
//     }
// while (strpos(implode($abString), "AAB") !== false || strpos(implode($abString), "BBA") !== false) {
    // $posAAB = strpos(implode($abString), "AAB");
    // $posBBA = strpos(implode($abString), "BBA");
    // if ($posBBA === false || is_numeric($posAAB) && is_numeric($posBBA) && ($posAAB < $posBBA)) {
    //     $target = $posAAB + 1;
    //     $other = $posAAB + 2;
    //     $abString[$target] = "B";
    //     $abString[$other] = "A";
    // } elseif ($posAAB === false || is_numeric($posAAB) && is_numeric($posBBA) && $posAAB > $posBBA) {
    //     $target = $posBBA + 1;
    //     $other = $posBBA + 2;
    //     $abString[$target] = "A";
    //     $abString[$other] = "B";
    // }
    // $ans++;
// }

echo $ans;


