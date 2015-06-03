<?php

/**
 * Problem:
 * Given an array arr[] of integers, find out the difference between any two elements such that larger element appears after the smaller number in arr[].Examples: If array is [2, 3, 10, 6, 4, 8, 1] then returned value should be 8 (Diff between 10 and 2). If array is [ 7, 9, 5, 6, 3, 2 ] then returned value should be 2 (Diff between 7 and 9)
 * http://www.geeksforgeeks.org/maximum-difference-between-two-elements/
 * complexity is O(n+m);
 */

function problem8($array) {
    
    $len = sizeof($array);
    // flags
    $maxInteger = 0;
    $minInteger = 0;
    $maxIndex = 0;
    $minIndex = 0;
    $currentInteger = 0;
    
    
    
    if ($len < 1) {
        return $len[0];
    }

    // initialization
    $maxInteger = $array[0];
    $minInteger = $array[0];
    $minIndex = 0;
    $maxIndex = 0;
    
    for ($index = 1; $index < $len - 1; $index++) {
        // cases
        if ($maxInteger < $array[$index]) {
            $maxInteger = $array[$index];
            $maxIndex = $index;
        }
    }
    
    for ($idx = 1; $idx < $maxIndex; $idx++) {
        // case to check min and see if min idx is before max idx
        if ($minInteger > $array[$idx] && $idx < $maxIndex) {
            $minInteger = $array[$idx];
            $minIndex = $idx;
        }
    }
    
    // calculate
    printf("Difference Between %d and %d = %d at Index MIN %d - MAX %d \n",
           $minInteger, $maxInteger, $maxInteger - $minInteger,
           $minIndex, $maxIndex );
    
    return; 
    
}
$arr = [2, 1, 4, 6, 10, 8, 1];
problem8($arr);

/**
 *  better solution
 *  O(n)
 **/
/* The function assumes that there are at least two
   elements in array.
   The function returns a negative value if the array is
   sorted in decreasing order.
   Returns 0 if elements are equal
*/
function problem8Efficient($array) {
    $maxDiff = $array[1] - $array[0];
    $minInteger = $array[0];
    $len = sizeof($array);
    for ($index = 1; $index < $len; $index++) {
        if ($array[$index] - $minInteger > $maxDiff) {
            $maxDiff = $array[$index] - $minInteger;
            echo "MAX DIFF NOW IS $maxDiff \n"; 
        }
        if ($minInteger > $array[$index]) {
            $minInteger = $array[$index];
        }
    }
    return printf("Max Diff is %d \n",$maxDiff);
}

$arr = [2, 1, 4, 6, 10, 8, 1];
problem8Efficient($arr);





?>