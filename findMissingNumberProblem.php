<?php

/**
 * Given an array not sorted - find the missing number
 *
 * ex: [1,2,6,4,3,8,7] output = 5
 */

 $arr = [1,2,6,4,3,8,7];
 
/** brute force O(n) **/
function bruteForceMissingNumber($arr, $n) {
    // we need to out put the missing number
    for ($i = 1; $i <= $n; $i++) { // iterate to all numbers
        $found = 0;
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] == $i) {
                $found = 1;
            }
        }
        if(!$found) {
            return "Missing Number ".$i."\n";
        }
    }
    return "order is complete \n";
    
}

echo bruteForceMissingNumber($arr, count($arr));

// work on this one
function hashTableMissingNumber($arr, $n) {
    $hashMap = array();
    for ($i = 1; $i <= $n; $i++) {
        $hashMap[$i] = 0;
    }
    for ($j = 0; $j < count($arr); $j++) {
        $hashMap[$arr[$j]] = 1;
    }
}

//echo hashTableMissingNumber($arr, count($arr));

function xOrMissingNumber($arr, $n) {
    /**
    $x = 0;
    $y = 0;
    for ($i = 1; $i <= $n; $i++) {
        $x ^= $i;
        printf("X of XOR = %d \n",$x);
    }
    for ($j = 0; $j <= $n - 1; $j++) {
        $y ^= $arr[$j];
        
        printf("Y of XOR = %d \n",$y);
    }
    
    echo "X of XOR ".$x."\n";
    
    return $x ^ $y;
    **/
    $XOR = 0;
    for ($i = 1; $i <= 7; $i++ ) {
        printf("BEFORE XOR This VALUE $i \n");
        printf("FORMULA XOR WHERE :: %d ^ %d  = will now be %d \n", $XOR, $i, ($XOR ^ $i));
        $XOR ^= $i;
        printf("NOW XOR This VALUE $XOR \n");
    }
    printf("END OF XOR IS $XOR \n");
    return;
    /**
    for($i=0;$i<=count($arr);$i++)
    {
        if($arr[$i] != 0) {
            printf("PRE X of XOR in IF = %d \n",$XOR);
            $XOR ^= $arr[$i];
            printf("X of XOR in IF = %d \n",$XOR);
        }
        $XOR ^= ($i + 1);
        printf("X of XOR = %d in LOOP \n",$XOR);
    }
    return $XOR;
    **/
}

echo xOrMissingNumber($arr, 7)."\n";