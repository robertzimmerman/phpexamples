<?php

/**
 *  data structure questions
 *   fine the longest running positive sequence in an array
 * eg [1,2,-3,2,3,4,-6,1,2,3,4,5,-8,5,6]
 * and it should be 5 numbers long starting at index 8 if index starts at 1
 **/

 function getLongestRunningSeq($arr) {
    // counters and flags
    $seqTotal = 1;
    $startIndex = 1;
    $len = count($arr);
    $largesTotalSeq = 0;
    $finalFirstIndexPlaced = 0;
    echo "Length of array $len \n";
    // iterate through array
    for ($i = 0; $i < $len - 1 /* from 0 - 5 indexes */; $i++) {
        // compare I with $i+1
        echo "compare ".$arr[$i + 1]." with ".$arr[$i]."\n";
        if (($arr[$i] + 1 == $arr[$i + 1])) {
           
           $seqTotal++; // increment seqTotal
           echo "addend seqTotal $seqTotal \n";
        } else {
            // check if $finalFirstIndexPlaced < $seqTotal then replace
            echo "finalTotalSeq = $largesTotalSeq compare to seqTotal = $seqTotal \n";
            if ($seqTotal > $largesTotalSeq) {
                $largesTotalSeq = $seqTotal;
                $finalFirstIndexPlaced = $startIndex + 1;
            }
            $seqTotal = 1;
            $startIndex = $i + 1;
        }
    }
    
    echo "Sequence Total = $largesTotalSeq at Starting Index = $finalFirstIndexPlaced";
 }
 
 //getLongestRunningSeq(array(1,2,3,1,4,5));
 
 getLongestRunningSeq(array(1,2,-3,2,3,4,-6,1,2,3,4,5,-8,5,6));
 
?>