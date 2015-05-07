<?php

// Quick sort

// lets create the partition of the quicksort :: bulk of the operation sorting

/**
 * steps for quicksort
 * divide the array in half
 * partition 
 * rightHalf = (0 - ((array / 2) - 1));
 * leftHalf = (((array / 2) + 1) - array);
 * quicksort(rigthhalf);
 * quicksort(lefthalf)
 */
function quickSort(&$arr, $begin, $end) {
      
   if ($begin < $end) {
      partition($arr, $begin, $end, $pivot);
      
      printf("array passed is [%s] and pivot is %s \n", implode(',',$arr),$pivot);
      printf("Begin %d and End %d \n", $begin, $end);
      quickSort($arr, $begin, $pivot - 1);
      quickSort($arr, $pivot + 1, $end);
      //quickSort($arr, $);
   }
   return 0;
}

/**
 * Partition function - 
 * we want all smaller ints from the pivot on the left side
 * and all the larger ints of the pivot on the right side
 *
 * start moving pivot compare to right side
 * swap and pivot is now on right side
 * left is now checking if < than pivot move left
 *
 * // go until all is moved and pivot = right
 *
 * so we check if pivot is 
 */

 function partition(&$arr, $left, $right, &$pivot = 0) {
    
    //$left = 0;
    //right = count($arr) - 1;
    $pivot = $left;
    
    while(true) { /* this will run until a return breaks out of it */
        // go through right to left if the right is always larger than pivot
        while ($arr[$right] > $arr[$pivot]) {
            $right--;  // decrement
        }
        // we want to check if arr[$right = pivot] then we just return cause everthing
        // is greater than pivot which is we wanted
        if ($right == $pivot) {
            break;
        } else {
            // here we swap
            $temp = $arr[$right];
            $arr[$right] = $arr[$pivot];
            $arr[$left] = $temp;
            $pivot = $right;
        }
    
        // now lets do the left moving to right
        while ($arr[$left] < $arr[$pivot]) {
            $left++; // keep moving
        }
        // we want to check once the top is not true then do following
        // if left == pivot we are done and everything smaller is on left side of pivot
        if ($left == $pivot) {
            break;
        } else {
            /** lets do the swap **/
            $temp = $arr[$left];
            $arr[$left] = $arr[$pivot];
            $arr[$right] = $temp;
            $pivot = $left;
        }
    } // end while 
    
 }
 
 
 $arr = [5,3,1,6,7,2,8];
 
 printf("original array [%s] \n", implode(',',$arr));
 
 //partition($arr);
 quickSort($arr, 0, count($arr) - 1);
 
 printf("new array [%s] \n", implode(',',$arr));
 
