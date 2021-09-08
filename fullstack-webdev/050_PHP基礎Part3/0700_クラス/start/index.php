<?php 
class Person
{
    private $name;
    public $age;

    function hello() {
        echo 'hello, ' . $this->name;
    }
}