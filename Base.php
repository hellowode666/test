<?php
class BaseClass
{
    function __construct()
    {
        echo '123';
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        echo 'abc';
    }
}

class OtherSubClass extends BaseClass
{

}

$obj = new BaseClass();

$obj = new SubClass();

$obj = new OtherSubClass();