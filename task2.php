<?php 

$numbers= [1,2,3,4,5,6,7,8,9,10];

function myFunction($n){
    return $n%2!==0;
}

$newNumbers= array_filter($numbers,"myFunction");

print_r($newNumbers) ;