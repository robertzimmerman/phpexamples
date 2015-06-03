<?php

/**
 * Binary Search
 * definition of a binary search is
 * when a list is sorted we can search by cutting in middle and
 * checking if its looking for is less > middle, search left side else right side
 */

 function iterativeBinarySearch($num, $arr) {
    
    $left = 0; // beginning array
    $right = count($arr); // total end of array
    $middle = ((int) $right / 2);// initial middle array
    
    while (1) { // check looping until we get a return
    // base case
        printf("LEFT = %d, RIGHT = %d, MIDDLE = %d, ARRAY = [%s]\n", $left, $right, $middle, implode(",",$arr)); // logging 
    
        
        if ($num == $arr[$middle]) {
            return "Found Num $num \n";
        }
        
        // also check if array is empty
        elseif (empty($arr)) {
            return "Could not find number";
        }
    
        // greater than middle
        // we return middle with the right side
        elseif ($num > $arr[$middle]) {
            $arr = array_slice($arr, $middle + 1); // get array with only the greater half
            $left = 0;// set the middle to be being left
            $right = count($arr);
            $middle = (int)($right / 2); // setting middle
        }
    
        elseif ($num < $arr[$middle]) {
            $arr = array_slice($arr, 0, $middle - 1); // get array with only the greater half
            // set the middle to be being left
            $right = count($arr);
            $middle = (int)($right / 2); // setting middle
        }
    
        else {
            return "Could not find number";
        }
    }
 }
    
    
 /**
  * Recursive
  *
  */
function recursiveBinarySearch($num, $arr) {
    
       // preemptive work
    $left = 0; // beginning array
    $right = count($arr) - 1; // total end of array
    $middle = ((int) $right / 2);// initial middle array
    
    printf("LEFT = %d, RIGHT = %d, MIDDLE = %d, ARRAY = [%s]\n", $left, $right, $middle, implode(",",$arr)); // logging 

    if ($num == $arr[$middle]) {
        printf("We found %d \n",$num);
        return 0;
    }
 
    // base case
    else if (count($arr) <= 1) {
        printf("Number %d is not in array \n",$num);
        return 0;
    }
    // if number is found
    
    else {
        if ($num > $arr[$middle]) {
            $arr = array_slice($arr, $middle); // get array with only the greater half
            recursiveBinarySearch($num, $arr);
        } else {
            $arr = array_slice($arr, 0, $middle); // get array with only the less half
            recursiveBinarySearch($num, $arr);
        }
    }
    
}
 
 
 
 
 
 $num = 8;
 $arr = [1,2,3,4,5,6,7,9,10];
 
 //echo "ITERATIVE \n";
 //echo iterativeBinarySearch($num, $arr)."\n";
 
 echo "RECURSIVE \n";
 recursiveBinarySearch($num, $arr)."\n";
 
 