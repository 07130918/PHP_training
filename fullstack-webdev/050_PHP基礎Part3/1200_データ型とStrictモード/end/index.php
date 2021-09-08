<?php declare(strict_types=1);
/**
 * データ型の宣言とStrictモード
 */
function add1 (int $val): int {
    return $val + 1;
}
$result = add1(1);
var_dump($result);

require_once 'person.php';
use animal\Person;
use animal\Japanese;

function callHelloMethod(Person $person): void {
    $person->hello();
}

$taro = new Japanese('太郎', 18);
callHelloMethod($taro);