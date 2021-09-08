<?php declare(strict_types=1); 
namespace animal;

abstract class Person
{
    protected string $name;
    public int $age;
    public static string $WHERE = 'Earth';

    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract function hello(): self;

    static function bye(): void {
        echo 'bye';
    }
}

class Japanese extends Person {

    public static string $WHERE = '日本';
    
    function hello(): self {
        echo 'こんにちは、' . $this->name;
        return $this;
    }

    function jusho(): self {
        echo '住所は' . parent::$WHERE . 'です。';
        return $this;
    }
}