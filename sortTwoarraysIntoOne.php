<?php

// 2 sorted arrays merge them into one sorted array

function mergeSortedArrays($array1, $array2) {
    // check if array1 is < array 2 then put in new array
    $sortedCombinedArray = array();
    
    $len = count($array1) + count($array2);
    
    // iterate
    for ($i = 0; $i < $len; $i++) {
        
        // lets use shift to remove an element in the beginning of the array
        // we need to check if array 1 count is not empty
        if (empty($array1) && empty($array2)) {
            return $sortedCombinedArray;
        } else if (empty($array1) && !empty($array2)) {
            $sortedCombinedArray[] = array_shift($array2);
        } else if (empty($array2) && !empty($array1)) {
            $sortedCombinedArray[] = array_shift($array1);
        } else {
            if ($array1[0] < $array2[0]) {
               $sortedCombinedArray[] = array_shift($array1);
               
            } else {
               $sortedCombinedArray[] = array_shift($array2);
               
            }
        }
        
    }
    
    return $sortedCombinedArray;
}

print_r(mergeSortedArrays([1,3,5,8,9,10],[2,4,6,7]));


?>