<?php
// 配列の操作に慣れよう。
// 配列操作関数
$arry = [
    ['table', 1000],
    ['chair', 100],
    ['mic', 100],
    ['shelf', 100],
    ['bed', 10000],
];
$arry[1][1] = 200;
array_shift($arry);
array_pop($arry);
array_splice($arry, 1, 1);
array_splice($arry, 1, 1, [['window', 999]]);

foreach ($arry as $val) {
    echo "{$val[0]}は{$val[1]}円です!";
    echo '<br/>';
}
