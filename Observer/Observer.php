<?php
require_once 'Loader.php';

interface Observer
{
    function update();//这里就是在事件发生后要执行的逻辑
}
//一个实现了EventGenerator抽象类的类，用于具体定义某个发生的事件