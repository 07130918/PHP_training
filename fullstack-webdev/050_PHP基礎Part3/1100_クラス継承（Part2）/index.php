<?php
/**
 * クラス継承
 */

// abstractがつくと継承が前提になりインスタンス化できない
abstract class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$WHERE;
        echo static::$WHERE;
    }
    // finalでオーバーライド不可、abstractで継承先で実装することにする
    abstract function hello();

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person {

    public static $WHERE = '日本';

    function __construct($name, $age = 30)
    {
        parent::__construct($name, $age);
    }

    function hello() {
        echo 'こんにちは、' . $this->name;
        return $this;
    }

    function jusho() {
        echo '住所は' . parent::$WHERE . 'です。';
        return $this;
    }
}

$taro = new Japanese('太郎');
$taro->hello();
echo $taro->age;
Japanese::bye();
$taro->jusho();
