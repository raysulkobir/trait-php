<?php

trait MyTrait
{
    static $number;
    abstract function sayHi();
}

class MyClassA
{
    use MyTrait;
    function sayHi()
    {
        echo "Hi myClass";
    }
}

class MyClassB
{
    use MyTrait;
    function sayHi()
    {
        echo "Hi myClassB";
    }
}

MyClassA::$number = 1;
echo MyClassA::$number;

$mA = new MyClassA();
$mA->sayHi();

$mB = new MyClassB();
$mB->sayHi();
