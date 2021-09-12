<?php
/**
 * クラスとStaticメソッド
 */
class Person
{
    private $name;
    public $age;
    // class内で共通の値を持ちたいときに以下のどちらかを使う
    public const whereTolive = 'Earth';
    private static $like = 'movies';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo "hello, {$this->name}";
        echo '<br/>';
        echo static::whereTolive;
        echo '<br/>';
        static::$like = 'baseball';
        static::bye();
        return $this;
    }

    static function bye() {
        echo 'bye';
        echo '<br/>';
        echo static::$like;
    }
}

$bob = new Person('Bob', 18);
$bob->hello();
echo '<br/>';
echo Person::whereTolive;
// $bob::bye();
// Person::bye();
