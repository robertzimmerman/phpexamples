<?php

/**
 *  numbers that are not ajacent are basically numbers that do come after each other
 *  adjacent means 1,2,3 are all adjacent
 *  have to see what this is all about actually
 */ 


function finMaxSumOfNonAdjacent($arr) {
    $incl = $arr[0];
    $excl = 0;
    $excl_new = 0;
    $len = sizeof($arr);
    
    for ($i = 1; $i < $len; $i++) {
        // current max excluding I
        $excl_new = ($incl > $excl) ? $incl : $excl;
        
        // current max including I
        $incl = $excl + $arr[$i];
        $excl = $excl_new;
        
    }
        
    return (($incl > $excl) ? $incl : $excl);
    
}


$array1 = [1,2,3,4,5,6,7];
$array1 = [3, 2, 5, 10, 7];
$array1 = [4,1,1,4,2,1];
$array1 = [5,4,6,6,9,2,8];
$array = [4,1,1,4,5,6];
$array = [1,3,3,5,5,5,5,5];
printf("MAX SUM OF NON ADJACENT NUMBERS : %d \n", finMaxSumOfNonAdjacent($array));

?>