<?php
/**
 * パスの書き方について学ぼう
 *
 * - 相対パスと絶対パス
 * - マジック定数 __DIR__, __FILE__を使ってみよう
 * - dirnameの使い方を学ぼう
 * - \と/は使い分けよう
 * - "と'は使い分けよう
 */

 require('file1.php');
 echo __DIR__;
 echo '<br/>';
 echo __FILE__;
 require(__DIR__ . '/sub/file2.php');
 echo dirname(__FILE__, 3);
