<?php

/***
 * PrimeFactorial
 * n%2 = 0
 *   2%2 = R
 *    then 2 -> 3
 *
 *    Time Complexity
 *    Log(n)  base 2
 *    N = Log(n)  base 2
 *    n = 2^N so its exponential
 *      
 */
function primeNumber($num) {
    
    $factors = array();
    
    // first method is to get % 2s
    while ($num % 2 == 0) {
        $factors[] = 2;
        $num = $num / 2;
    }
    
    // next step is to get the remainers here
    $factor = 3;
    $stop_at = (int) sqrt($num);
    
    while ($factor <= $stop_at) {
        
        // mod it if it is == 0
        while ($num % $factor == 0) {
            $factors[] = $factor;
            $num = $num / $factor;
            // new stop at with sqrt num
            $stop_at = (int) sqrt($num);
        }
        // skipping evens since we know 2 was not divisble with num
        $factor += 2;
        
    }
    
    if ($num > 1) {
        $factors[] = $num;
    }
    return $factors;
    
}


printf("Factors are %s \n", implode("X",primeNumber(50)));
