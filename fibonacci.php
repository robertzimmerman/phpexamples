<?php

// fibonacci seq where sum of one number is by summing of the last two
// i.e. = 1, 1, 2, 3, 5, 8, 13

// doing it iterative // print the sequence out given the number
//
function fibonacci($num) {
    
    $arr = array();
    $arr[0] = 1; // place holder flags since we know the first 2 indexes are 1
    $arr[1] = 1;
    for ($i = 2; $i <= $num; $i++) {
        // set the formula
        $arr[$i] = $arr[$i - 1] + ($arr[$i - 2]); 
    }
    
    return $arr;
}

//print_r(fibonacci(8));


// recursive
function fibonacciRecursive($arr = array(), $num = 0) {
    
    $newArray = array();
    // base case
    if (count($arr) == $num + 1) {
        return $arr;
    }
    
    if (count($arr) < 2) {
        $arr = [1,1]; // constructor
        return fibonacciRecursive($arr, $num);
    }
    $len = count($arr);
    
    array_push($arr, $arr[$len - 1] + $arr[$len - 2]);
    
    return fibonacciRecursive($arr, $num);
}

echo "fibonacciR \n";
print_r(fibonacciRecursive(array(), 8));

?>