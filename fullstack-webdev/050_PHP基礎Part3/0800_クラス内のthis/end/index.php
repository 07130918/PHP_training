<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

    function bye() {
        echo 'bye, ' . $this->name;
        return $this;
    }
}

$bob = new Person('Bob', 18);
$bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();