<?php


function palindromeByInteger($num) {
    
    $revNum = 0;
    while ($num != 0) {
        $revNum = ($revNum * 10) + ($num % 10);
        echo "reverse number is $revNum \n";
        $num = floor($num / 10);
        echo "number is $num \n";
    }
    
    return $revNum;
    
}

echo palindromeByInteger(22)."\n";


?>