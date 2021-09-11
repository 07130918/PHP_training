<?php
/**
 * 名前空間について学ぼう
 *
 * コードの格納場所
 */
require_once 'lib.php';
use function lib\with_tax;
use const lib\sub\TAX_RATE;

// $price = \lib\with_tax(1000, 0.08);
$price = with_tax(1000, 0.08);
echo $price;
echo '<br/>';
// echo \lib\TAX_RATE;
echo TAX_RATE;
