<?php
require 'Loader.php';

class Event extends EventGenerator
{
    function triger()
    {
        echo 'Event<br>';
    }
}

class Observer1 implements Observer
{
    function update()
    {
        // TODO: Implement update() method.
        echo '逻辑1<br>';
    }
}

class Observer2 implements Observer
{
    function update()
    {
        // TODO: Implement update() method.
        echo '逻辑2<br>';
    }
}
$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->triger();
$event->notify();