<?php
// 名前空間の宣言
namespace lib;

use const lib\sub\TAX_RATE;

function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

namespace lib\sub;

const TAX_RATE = 0.1;
