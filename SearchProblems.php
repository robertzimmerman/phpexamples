<?php

/**
 * Problem : Given an Array of N, find out if the array as any duplicates or not
 */

 /**
  * My theory - we would iterate through the array
    store each element with its counter and add it to mapped array where index is the element and counter is the value
    but tecnically we just need to know if the array has a dup. so there is many ways to do this.
    such as if in_array of map we can return or if map[i] = 1 already exist then we return which can make this O(n)
    // maybe a stack
  
  */
 
 $arr = [1,3,2,5,100,44,5,33,3];
 
 function searchProblem($arr) {

    $mapValues = array();
    for($i = 0; $i < count($arr); $i++) {
       if (in_array($arr[$i], $mapValues)) {
        return "Has a duplicate with ". $arr[$i]."\n";
       }
       array_push($mapValues,$arr[$i]);
    }
    print_r($mapValues);
    return "no dublicates \n";
 }
 echo searchProblem($arr);

 
 
 function searchRepeatWithMap($arr) {
    $mapArrays = array();
    for ($i = 0; $i < count($arr); $i++) {      
        if (array_key_exists($arr[$i],$mapArrays)) {
            return "we found a duplicate in ".$arr[$i];
        }
        $mapArrays[$arr[$i]] = 1;   
    }   
 }
 
 
 echo searchRepeatWithMap($arr)."\n";
 
 
 
 