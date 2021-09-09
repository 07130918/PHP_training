<?php
/**
 * 税率計算のための関数を記述したファイル
 */

 /**
  * 税込み価格取得関数
  *
  * @param int $base_prise 価格
  * @param float $tax_rate 税率
  * @return int 税込金額
  * @see https://example.com
  */
function with_tax($base_price, $tax_rate = 0.1)
{
    return round($base_price + ($base_price * $tax_rate));
}

$fn = "with_tax";
$price = $fn(1000);
echo $price;
