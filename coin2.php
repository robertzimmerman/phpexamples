<?php

$curSum = 0;
$coins = [2,3,7,11];
$index = count($coins) - 1;
$sum = 10;
$change = array();
$changeSet = array();


function coinChange($curSum, $coins, $index, $sum, $change) {
    
    //printf("at index $index\n");
    //printf("currSum = %d \n", $curSum);
    //printf("this is change \n");
    //print_r($change);
    if ($index < 0) {
        //printf("shouldn't we exit");
            return;
    }
    
    
    $tempSum = 0;
    $tempSum = $curSum + $coins[$index]; // temp sum to use with future coin
    //printf("tempSum = %s index %d and coin %d \n", $tempSum, $index, $coins[$index]);   
    $coin = $coins[$index];
    
    array_push($change, $coin); // adding a coin to change
    //printf("coins are %s \n", implode(",",$change));
    // base case   
    
    
    if ($tempSum == $sum) {
        
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
    
    elseif ($tempSum > $sum) {
        array_pop($change);
        coinChange($curSum, $coins, $index - 1, $sum, $change);
        
    }
    else {
        // we need to see if currentCoin is going to go over - or next coin will be over
        if ($tempSum + $coins[$index] > $sum) {
            // lets check if coin next is also going to be greater
            
            if (($index - 1 >= 0) && (($tempSum + $coins[$index - 1]) > $sum)) {
                array_pop($change);
                coinChange($curSum, $coins, $index - 1, $sum, $change);
            }
        }
        $curSum = $tempSum;
        // here we add the same coin
        coinChange($curSum, $coins, $index, $sum, $change);
    }
    
}
for ($i = count($coins) - 1; $i >= 0; $i--) {
    coinChange($curSum, $coins, $i, $sum, $change);
}