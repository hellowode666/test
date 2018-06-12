<?php
class MyDestructableClass
{
    function __construct()
    {
        echo '123';
        $this->name = 'my';
    }
    function __destruct()
    {
        echo 'de'.$this->name."<br>";
    }
}
$obj = new MyDestructableClass();