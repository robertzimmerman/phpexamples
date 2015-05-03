<?php

$curSum = 0;
$coins = [2,3,5,20,25];
$index = count($coins) - 1;
$sum = 25;
$change = array();
$changeSet = array();

/**
 *  in here order does not matter - combinations
 * 
 */


function coinChange($curSum, $coins, $index, $sum, $change) {
    
    if ($index < 0) {
             printf("shouldn't we exit");
            return;
    }
    
    
    if ($curSum == $sum) {
        
        printf(" change { %s } \n",implode(",",$change)); // print change
        return;
    }
    
    /** we need do a couple of things here
     *
     *  first off we need to go to the next coin (so coin - 1) and go do change again
     *  take back the previous curSum and pass it
     *  take the $index and -1 of it to the next coin
     *  remove the last change.
     **/
   /** 
    elseif ($tempSum > $sum) {
        array_pop($change);
        coinChange($curSum, $coins, $index - 1, $sum, $change);
        
    }
    **/
    else {
        printf("curSum = %s index %d and coin %d \n", $curSum, $index, $coins[$index]);
        
        // we need to see if currentCoin is going to go over - or next coin will be over
        if ($curSum + $coins[$index] > $sum) {
            // lets check if coin next is also going to be greater
            
            if (($index - 1 >= 0) && (($curSum + $coins[$index - 1]) > $sum)) {
                // we are just going to move the index
                $coin = array_pop($change); // puts in coin in array
                $curSum -= $coin;
                coinChange($curSum, $coins, $index - 1, $sum, $change);
            } else {
                coinChange($curSum, $coins, $index - 1, $sum, $change);
            }
            
        } else {
            // here we add the same coin and go again
            array_push($change, $coins[$index]); // puts in coin in array
            $curSum += $coins[$index];
            coinChange($curSum, $coins, $index, $sum, $change);
        }
    }
    
}
for ($i = count($coins) - 1; $i >= 0; $i--) {
    coinChange($curSum, $coins, $i, $sum, $change);
}