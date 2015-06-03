<?php

/**
 * find the longest repeated characters in a string
 * ex: abbancdddda
 * answer output = letter d, len 3, index = 6
 *
 */

 function repeatedSeq($str) {
    
    $len = strlen($str);
    
    // flags - output
    $initialIndex = 0;
    $lenOfSeq = 0;
    $letter = '';
    
    // flag counters
    $counter = 1;
    $currLetter = '';
    $currIndex = 0;
    
    
    // initialization
    $currLetter = $str[0];
    $currIndexIndex = 1;
    for($i = 1; $i < $len; $i++) {
        if ($currLetter == $str[$i]) {
            $counter++;
        } else {
            
            $currIndex = $i;
            $currLetter = $str[$i];
            $counter = 1;
        }
        if ($lenOfSeq < $counter) {
                $lenOfSeq = $counter;
                $initialIndex = $currIndex;
                $letter = $currLetter;
                printf("lenOfSeq %d to counter %d for letter %s \n",$lenOfSeq,$counter,$currLetter);
        }
        printf("current Letter %s with letter %s on index %d and counter is at %d \n",$currLetter, $str[$i], $i, $counter);
        
    }
    
    return printf("initialIndex = %d :: letter = %s :: length :: %d \n", $initialIndex, $letter, $lenOfSeq);   
 }
 
 repeatedSeq("aabbbcbaaaaaaabbssssbbbbb");


?>