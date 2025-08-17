<?php

## 八近傍
## 上下左右ナナメ1マス分移動できる：将棋の王の動き

## 方針1: 人がいる方に移動してシミュレーションする → TLEになりそうなので別案を考える
## 方針2: ど真ん中に集まればいいのでは？という考察になる
## 八近傍への移動は、行と列(x,y)「独立に考えて良い」ので一次元の問題に落とし込む。なぜか？
### 行：次のステップで移動できる場所は、左・とどまる・右
### 列：次のステップで移動できる場所は、上・とどまる・下

### 一次元に落とし込むと、真ん中のやつによっていくような動きになる
### ステップ数・・・行(列)単体 両端同士の距離 / 2 くらいになりそう
### 行の差と列の差、max()で大きい方をえらぶ

$n = intval(trim(fgets(STDIN)));

$minR = INF;
$maxR = -INF;
$minC = INF;
$maxC = -INF;

for ($i = 1; $i <= $n; $i++) {
    [$r_i, $c_i] = explode(' ', trim(fgets(STDIN)));
    $minR = min($minR, $r_i);
    $maxR = max($maxR, $r_i);
    $minC = min($minC, $c_i);
    $maxC = max($maxC, $c_i);
}
$ans = intdiv(max($maxR - $minR, $maxC - $minC)+1, 2);
echo $ans . PHP_EOL;