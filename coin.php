<?php

$curSum = 0;
$coins = [3,2];
$index = count($coins) - 1;
$sum = 5;
$change = array();
$changeSet = array();
function coinChange($curSum, $coins, $index, $sum, $change) {
    
    if (empty($coins)) {
        printf("shouldn't we exit");
            return;
    }
    
    
    for ($i = $index; $i >= 0; $i--) {   
        $tempSum = 0;
        $tempSum = $curSum + $coins[$i]; // temp sum to use with future coin
        array_push($change, $coins[$i]);
        //printf("currSum = %d \n", $curSum);
        //printf("coins are %s \n", implode(",",$change));
        //printf("tempSum = %s index %d and coin %d \n", $tempSum, $i, $coins[$i]);
        if ($tempSum == $sum) {
            
            array_pop($coins);
            printf("Coins left %d \n",count($coins));
            if (count($coins) == 0) {
                printf("coins gone \n");
                return;
            }
            $newIndex = (count($coins) - 1); // pop the last one since we started with that
            coinChange(0, $coins, $newIndex , $sum, array());
            
            printf(" change { %s } \n",implode(",",$change));
            return;
        } else if ($tempSum < $sum) {
            $curSum =  $tempSum;
            // because we are here
            coinChange($curSum, $coins, $i, $sum, $change);
        } else {
            printf("pop out change of the array");
            array_pop($change);
            print_r($change);
        }   
    }
    
    array_pop($coins);
}

coinChange($curSum, $coins, $index, $sum, $change);