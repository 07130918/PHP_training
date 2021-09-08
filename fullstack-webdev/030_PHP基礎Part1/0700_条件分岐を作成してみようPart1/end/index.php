<?php 
// 条件分岐の基本的な書き方（Part.1）
// AND(&&)条件、OR(||)条件（Part.1）
// ==と===の違い（Part.2）

/**
 * 条件１：
 * 50点未満：不合格
 * 50点以上 70点未満：合格
 * 70点以上：秀
 * 
 * 条件２：
 * 欠席日数
 * ５日以上：不合格
 */

 $score = 80;
 $kesseki = 5;

 if($score < 50 || $kesseki >= 5) {
     echo '不合格';
 } else if($score < 70) {
     echo '合格';
 } else {
    echo '秀';
 }
