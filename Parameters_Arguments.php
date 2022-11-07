<?php

function sum(){ // simple function
    $num_1 = 10;
    $num_2 = 5;
    $result = $num_1 + $num_2;
    echo "number {$num_1} and number {$num_2} sum result is.{$result} </br>";
    }
    sum();
    
function sum_with_parameters($num_1,$num_2){ // when you create a function that time you pass parameters in function 
    
    $result = $num_1 + $num_2;
    echo "two number sum with parameters, number one is {$num_1} and number two is{$num_2} sum result is.{$result} </br>";
    }
    sum_with_parameters(25,20);// when you call a function that time you pass the value behalf of parameter is called argument in function 
?>