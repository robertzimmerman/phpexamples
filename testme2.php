<?php

function sort2Arrays($arr1, $arr2) {

 // first i want to go and compare array 1 index 0 with index 0 in array 2 
//  if one is smally pop in new array.

    $sortArrayTotal = array();
    // counters
    $arrCnt1 = $arrCnt2 = 0;
    
    for ($i = 0; $i < count($arr1) + count($arr2); $i++) {
        if($arrCnt2 >= count($arr2)) {
            $sortArrayTotal[] = $arr1[$arrCnt1];
            $arrCnt1++;
        } else if ($arrCnt1 >= count($arr1)) {
            $sortArrayTotal[] = $arr2[$arrCnt2];
                $arrCnt2++;
        } else {
            if ($arr1[$arrCnt1] < $arr2[$arrCnt2]) {
                $sortArrayTotal[] = $arr1[$arrCnt1];
                $arrCnt1++;
            } else {
                $sortArrayTotal[] = $arr2[$arrCnt2];
                $arrCnt2++;
            }
        }
        
        
    }
    
    return $sortArrayTotal;
}

print_r(sort2Arrays(array(1,5), array(2,3,4,6)));

?>