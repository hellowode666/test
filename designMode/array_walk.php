<?php
function myfunction($value,$key)
{
echo "$key - $value<br>";
}
$a=array("1"=>"red","2"=>"green","3"=>"blue");
array_walk($a,"myfunction");