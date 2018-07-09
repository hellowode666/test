<?php
$arr1 = array('0'=>1,'1'=>2,'2'=>3);
$arr2 = array('0'=>2,'1'=>3,'2'=>4);
$res = array_diff($arr1,$arr2);
var_dump($res);