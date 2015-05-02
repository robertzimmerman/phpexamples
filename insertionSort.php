<?php

function insertionSort($arr) {
    $len = count($arr);
    
    for($i = 1; $i < $len; $i++) {
        
        // check the next index to last
        $currentValue = $arr[$i];
        $position = $i;
        // go check every index in array of new one
        while($position > 0) {
            if ($arr[$position] < $arr[$position - 1]) {
                // swap
                $temp = $arr[$position - 1];
                $arr[$position - 1] = $arr[$position];
                $arr[$position] = $temp; 
            }
            $position--;
        }
        
    }
    
    return $arr;
    
}

print_r(insertionSort([2,1,5,4,33,22,12,32]));


?>