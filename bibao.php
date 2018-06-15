<?php
class bibao{
$self = $this;
$a = function($name) use ($self){
	printf($name);
	$this->aa();
};

function aa(){
	echo 123;
}
$a('hello');
}