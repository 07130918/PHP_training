<?php
/**
 * 理解度チェック（関数とスコープ）
 * 
 * 以下のDocコメントを元に関数を作成してみてください。
 */

/**
 * 問１：生徒の点呼をとる関数(tenko)
 * 
 * 以下のような点呼をとりましょう。
 * ```
 * （出席しているとき）
 * taroは出席しています。
 * （欠席しているとき）
 * taroは欠席しています。
 * ```
 * $is_absentのデフォルト引数はfalseとしてください。
 * 
 * @param string $student 生徒
 * @param bool $is_absent true:欠席 false:出席
 * @return void 
 */

$student1 = 'taro';
$student2 = 'jiro';
$student3 = 'hanako';

/**
 * 問２：カウンター関数(counter)
 * 
 * グローバルスコープに定義された $num に対して、
 * 引数でわたってきた $step を足し合わせた数値を
 * $num に再び格納して、画面に出力するプログラムを作成してください。
 * $stepのデフォルト引数は 1 としてください。
 * 
 * @global int $num 足し合わせる元となる数値
 * 
 * @param int $step 足し合わせる数値
 * 
 * @return int 合計値 ($num + $step)
 */

$num = 0; 
