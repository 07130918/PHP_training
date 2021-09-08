<?php
/**
 * プログラムの記述順には注意しよう
 * 
 * - 関数内の処理は関数が実行されて初めて動く
 * - 関数宣言はプログラムの実行よりも前に準備される
 * - それ以外は上から順に実行される
 */
$num = 0;
counter(2);

function counter($step = 1) {
    global $num;
    $num += $step;
    echo $num;
    return $num;
}

counter(2);