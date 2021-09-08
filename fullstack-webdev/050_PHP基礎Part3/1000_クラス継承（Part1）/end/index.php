<?php
/**
 * クラス継承
 */
class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person {

    // public static $WHERE = '日本';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = '30';
    }
    function hello() {
        echo 'こんにちは、' . $this->name;
        return $this;
    }

    function jusho() {
        echo '住所は' . static::$WHERE . 'です。';
        return $this;
    }
}

$taro = new Japanese('太郎', 18);
$taro->hello();
$taro->jusho();
// echo $taro->age;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();