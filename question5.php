<?php

$number = 4;
// output 1, 1 and 2, 0
$append = array();
for ($x = 1; $x <= $number; $x++) {
    // this will be 1, 2
    echo "with X being called $x \n";
    $append[$x] = array(); // set up the first initial array sequence so seq 1 and sq2
    // we need to fill the array with numbers that can sum to $x
    for ($y = $x - 1; $y > 0; $y--) {
        //echo"append[y] is showing at $y \n";
        echo "with Y being called $y \n";
        foreach($append[$y] as $z) {
            echo "merging the following \n";
            print_r($z);
           // print_r("getting this array $z and merging with ".array($x-$y));
            $append[$x][] = array_merge($z, array($x-$y));
            echo "at Index append array $x \n";
            echo "added value $x - $y = ".($x - $y)."\n";
            print_r($append[$x]);
        }
    }
    $append[$x][] = array($x); //why is this needed  this is just ot display 0 index// 
    
}




//print_r($append[$number]);

?>