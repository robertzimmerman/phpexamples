<?php


//think like a programmer episode 4 : recursion

// iterate first

// you can really only think of recusive after you try iteration

// problem 1
// given 2 arrays get the absolute of their index's values

// good definition http://www.sitepoint.com/understanding-recursion/
// youtube video: https://youtu.be/oKndim5-G94?list=PLKQ5LYb497AZIZe9dBWy8GwLluVaMQVj0

$arr1 = [15,-4,56,10,-23];
$arr2 = [14,-9,56,14,-23];

// iterate
function iterate($arr1, $arr2) {
    
    $sum = 0;
    $sumArray = array();
    for ($i = 0; $i < count($arr1); $i++) {
        $sumArray[$i] = abs($arr1[$i] - $arr2[$i]);
        $sum += $sumArray[$i];
    }
    
    printf("Sum of these {%s} = %d \n", implode(",",$sumArray), $sum);
    
}

iterate($arr1, $arr2);


/** base case
 * function of a small set
 * Dispatcher
 * Tail Recursion
 *
 *  It is possible to write functions in such a way that they do not operate on returned values,
 *  but instead pass all required values as parameters. This is known as a tail call (or tail recursion).
 *  This method is usually preferred as a languageÕs runtime can sometimes optimize the calls so that thereÕs
 *  no danger of blowing up the call stack, but PHP does not do this.
 *
 **/

function recursiveTail($arr1, $arr2, $sumArray = array(), $sum = 0) {
    
    if (count($arr1) == 0) {
        printf("Recursive Function:Result {%s}\n", implode(",",$sumArray));
        return;
    }
    $sumArray[] = abs($arr1[0] - $arr2[0]);
    array_shift($arr1);
    array_shift($arr2);
    recursiveTail($arr1, $arr2, $sumArray, $sum);
}

recursiveTail($arr1, $arr2);



/** base case
 * function of a small set
 * Dispatcher
 * Head Recursion
 *
 * When the function calls itself, it waits for the result from the call before returning a value of its own.
 *
 **/
function recursionHead($arr1, $arr2, $size) {
     if ($size < 0) {
        return 0;
    }
    
    $lastElementDiff = abs($arr1[$size] - $arr2[$size]);
    printf("PRINT ON STACK $lastElementDiff\n");
    $diff = recursionHead($arr1, $arr2, $size - 1) + $lastElementDiff;
    
    return $diff;
}

printf("Sum of diff {%d}", recursionHead($arr1, $arr2, count($arr1) - 1));




