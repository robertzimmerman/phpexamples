<?php
/**
 *  Datastructure 4
 *  testing shift
 **/

 $arr = [1,2,3,4,5];
 print_r($arr);
 
 echo count($arr)."\n";
 
 

 // better question shift the array to certain number
 // ex array 1,2,3,4,5
 // out array 4,5,1,2,3
 // should be able to push and pop
 // we would need number of slots to pop
 // then we shift to pop the beginning of the stack and push into the stack pop first on stack and push to end of stack
 $num = 2;
 
 for ($i = 0; $i <= $num; $i++) {
    // popped value
    $popValue = array_shift($arr);
    echo "popValue $popValue \n";
    // push popValue
    array_push($arr, $popValue);
 }
 
 print_r($arr);
 
 
 // binary search of look for a number in a sorted array
 // we need the following
 // pivot or middle to test if num to search is greater than or less than
 // if less than, search index 0 to middle
 // if greater than, search index middle to last
 // this is just still first part of O(n) // afterwards you want to divide half of that and check repeat
 
 
 
 function binarySearchSimple($arr, $num, $processes = 0) {
    
    $middle = (int)(floor(count($arr) / 2)); // gives us 1
    /**
     *  NOTE if using 0 index better use floor if index starts at 1 then use ceil // all interpretations
     **/
    
    echo "$middle \n";
    
    // if num search is greater than middle then we should return array middle to last
    if ($arr[$middle] < $num) {
        $newArray = array_slice($arr, $middle + 1);
        print_r($newArray);
        $processes++;
        echo "process proceeded $processes \n";
        return binarySearchSimple($newArray, $num, $processes);
    } else if ($arr[$middle] > $num) {
        // if num search is less than middle return first to middle
        $newArray = array_slice($arr, 0, $middle);
        $processes++;
        echo "process proceeded $processes \n";
        return binarySearchSimple($newArray, $num, $processes);
    } else {
        // middle is num we are done
        echo "num is found in number of $processes \n";
    }
    
 }
 
 binarySearchSimple(array(1,2,3,4,5,6,7,8,11,12),7);
 
 // binarySearchWith off sequence
 // example array shifted [4,5,6,7,1,2,3]
 
 // what do we need
 /**
  * we need first middle and end of an array even a sub array
  * middle will be floor(arr / 2)
  * first will be index[0]
  * last will be index[last]
  *
  * comparison's
  * if first is > last we know that first to middle will be higher than middle to last
  * if so then we check if num belongs to larger half or smaller half
  * this only works if array was set to half 
  **/
 
  function binarySearchMedium($array1, $num, $processes = 0) {
    
    // middle
    $len = count($array1);
    $middle = (int)floor($len / 2);
    echo $middle." is the middle \n";
    $first = $array1[0];
    $last = $array1[$len-1];
    $newArray = array();
    
    if ($array1[$middle] == $num) {
        return "Found it in # $processes";
    } else if ($first > $last) {
    
        if ($num >= $first) {
            $newArray = array_slice($array1, 0, $middle);
       
        } else {
             $newArray = array_splice($array1, $middle + 1, $len);
        }
    } else {
        if ($num <= $last) {
            $newArray = array_slice($array1, $middle + 1, $len);
        } else {
            $newArray = array_splice($array1, 0, $middle);
        }
    }
    $processes++;
    print("this is the array being sent \n");
    print_r($newArray);
    return binarySearchMedium($newArray, $num, $processes);
  }
  print("on binarySearchMedium \n");
  $arr = [4,5, 6, 7, 8, 1, 2, 3];
  
  echo binarySearchMedium($arr, 2);
 
 
 
 
 
 //================================================================================//
  // what do we need
 /**
  * we need first middle and end of an array even a sub array
  * middle will be floor(arr / 2)
  * first will be index[0]
  * last will be index[last]
  *
  * comparison's
  * if first is > last we know that first to middle will be higher than middle to last
  * if so then we check if num belongs to larger half or smaller half
  * this only works if array was set to half 
  **/
 
 

?>