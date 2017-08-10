<?php

//$var2=1;
//$var=function() use ($var2){
    //echo 'esto es closure';
    //echo 'value' .$var2;
//};
//$var();
$x=3;
$number=[1,2,3,4];
$result=array_map(function($n) use ($x){
    return $n*$x;
    
}, $number);

var_dump($result);