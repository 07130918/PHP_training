<?php
/**
 * スコープ
 * 変数が参照可能な範囲
 *
 * - グローバルスコープ(ファイルに直書きじたもの)
 * - ローカルスコープ(関数内)
 * - スーパーグローバル
 */

$a = 0;
echo $a;
echo '<br/>';

function fn1() {
    $b = 1;
}

function fn2() {
    // global宣言をすることで関数外の変数が使えるようになる
    global $a;
    echo $a;
    echo '<br/>';
    // スーパーグローバル phpが元から持ってる
    var_dump($_SERVER);
    if(true) {
        $b = 2;
    }
    echo $b;
}
fn2();
