<?php
trait NumberOne
{
    function numberOne()
    {
        echo "Number One";
        parent::numberOne();
    }
}

class subClass
{
    function numberOne()
    {
        echo "Number two";
    }
}

class Number extends subClass
{
    use NumberOne;
} 

$n = new Number();
echo $n->numberOne();