<?php
class SimpleClass{
    public $var = 'a default value';

    public function displayVar(){
        echo $this->var;
    }

}
$simple = new SimpleClass();
echo $simple->var;
echo '<hr>';
echo $simple->displayVar();