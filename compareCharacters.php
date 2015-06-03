<?php

// similar to anagram we want to compare if all characters in str2 are in str1

// here we use a map with increments
// then we iterate str2 and if we find a match we decreate map of str1 and.

// cases
// map array str1 is empty we are good after the end of str2 iteration

// big O is basically multiples of O(n)

function compareCharacters($str1, $str2) {
    
    $mapStr1 = array();
    
    // put str1 in map
    for ($i = 0; $i < strlen($str1); $i++) {
        if (!array_key_exists($str1[$i], $mapStr1)) {
            $mapStr1[$str1[$i]] = 0;
        }
        $mapStr1[$str1[$i]] += 1; // key is character and map will increment
        
    }
    
    print_r($mapStr1);
   
    // iterate str2 and start decrementing key = if map[key] == 0 pop out of array or unset
    for ($j = 0; $j < strlen($str2); $j++) {
        // check if set
        if (array_key_exists($str2[$j], $mapStr1)) {
            // check if map key is greater than 0 
            $mapStr1[$str2[$j]] -= 1;
            if ($mapStr1[$str2[$j]] <= 0) {
                // pop it out of array
                unset($mapStr1[$str2[$j]]);
            }
        }
        print_r($mapStr1);
       
    }
    
    if (empty($mapStr1)) {
        return "we are here true";
    }
    
    return "we are here false";
}

echo compareCharacters('banana', 'ananannb')."\n";


?>