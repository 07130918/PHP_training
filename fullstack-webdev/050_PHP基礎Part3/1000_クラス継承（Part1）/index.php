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
        echo '<br/>';
        echo $this->age;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person {

    public static $WHERE = '日本';

    function __construct($name, $age = 30)
    {
        $this->name = $name;
        $this->age = $age;
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

$taro = new Japanese('太郎');
$taro->hello();
echo '<br/>';
$taro->jusho();
echo '<br/>';
echo $taro->age;
echo '<br/>';
// $bob->hello()->bye();

$tim = new Person('Tim', 32);
$tim->hello();
