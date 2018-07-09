<?php
function test($n)
{
    echo $n.'&nbsp;';
    if($n>0){
        test($n-1);
    }else{
        echo '<-->';
    }
    echo $n.'&nbsp;';
}
test(10);