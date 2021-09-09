<?php
/**
 * 関数を作ってみよう（Part. 2）
 *
 * - デフォルト引数を設定可能
 * - 文字列を関数として実行可能
 */

function with_tax($base_price, $tax_rate = 0.1) {
    return round($base_price + ($base_price * $tax_rate));
}

$fn = "with_tax";
$price = $fn(1000);
echo $price;
