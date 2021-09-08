<?php 
namespace animal;

abstract class Person
{
    protected $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract function hello();

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person {

    public static $WHERE = '日本';
    
    function hello(): self {
        echo 'こんにちは、' . $this->name;
        return $this;
    }

    function jusho() {
        echo '住所は' . parent::$WHERE . 'です。';
        return $this;
    }
}