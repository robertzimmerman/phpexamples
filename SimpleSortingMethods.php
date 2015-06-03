<?php

/**
 * find the min of the list and swap it 
 * Selection sort
 */
function selectionSort($arr) {
    
    // iterate though the elements
    for ($i = 0; $i < count($arr); $i++) {
        // we loop element I with the rest to see if its larger then we swap
        printf("Passing in [%d]\n",$arr[$i]);
        for ($j = $i; $j < count($arr); $j++) {
            // swap if A[i] is larger then A[j]
            if ($arr[$i] > $arr[$j]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $tmp;
            }
            printf("being moved array is now [%s] when comparing %d and %d \n",implode(",",$arr),$arr[$i], $arr[$j]);
        }
    }
    return $arr;
}

/**
 * bubble sort, bubble up the number until it is not larger
 *
 */
function bubbleSort($arr) {
    
    // iterate though the elements
    for ($i = count($arr)-1; $i > 0; $i--) {
        // we loop element I with the rest to see if its larger then we swap
        
        for ($j = 0; $j < $i; $j++) {
            // swap if A[i] is larger then A[j]
            //printf("Passing in [%d]\n",$arr[$i]);
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
            printf("being moved array is now [%s] when comparing %d and %d \n",implode(",",$arr),$arr[$j], $arr[$j + 1]);
        }
    }
    return $arr;
}




$arr = [33,44,12,5,1,6,3,6,77,4];




printf("array is [%s] sorted \n", implode(",",bubbleSort($arr)));

