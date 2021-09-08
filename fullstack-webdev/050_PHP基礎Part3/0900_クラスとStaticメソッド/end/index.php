<?php
/**
 * クラスとStaticメソッド
 */
class Person
{
    private $name;
    public $age;
    public const whereTolive = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        echo static::whereTolive;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

$bob = new Person('Bob', 18);
$bob->hello();
echo Person::whereTolive;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();