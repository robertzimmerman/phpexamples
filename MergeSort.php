<?php
class MergeSort {

    function merge($left, $right) {
        
        // merge left and right sorting
        $sorted = array();
        // compare the first element from left with first element in right
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] < $right[0]) {
                $sorted[] = $left[0]; // put first in left 
                array_shift($left); // pop first in left
            } else {
                $sorted[]=$right[0]; // put first right in sorted
                array_shift($right); // pop first index in right array
            }
        }
        
        for ($i = 0; $i < count($left); $i++) {
            $sorted[] = $left[$i];
        }
        for ($i = 0; $i < count($right); $i++) {
            $sorted[] = $right[$i];
        }
        return $sorted;
    }

    public function sort($arr) {
        
        // if an array has one element return that element
        $count = count($arr);
        if ($count<=1) {
            return $arr; // will return the array if it is 1 element
        }
        $mid=(int)$arr/2; // this will cut the array in half that is being passed on
        $left = array(); // place holder for left array
        $right = array(); // place holder for rigth array;
        for ($i = 0; $i < $mid; $i++) {
            $left[] = $arr[$i]; // place the left half of array in place holder left
        }
        for ($i = $mid; $i <= $count - 1; $i++) {
            $right[] = $arr[$i]; // place the right half of array in place holder right
        }
             
       $this->merge($this->sort($left), $this->sort($right));
    }
    
    

}



// merge sort
// divide the array into 1 element for loop
$arr = array(5,10,1,3);

$merge = new mergeSort;

print_r($merge->sort($arr));

?>
