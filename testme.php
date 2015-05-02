<?php

// interate 100

for ($i = 1; $i <= 100; $i++) {
    
   $value = "";
   /** 
    if ($i % 3 == 0 && $i % 5 == 0) {
        print "fizz"
    }
    **/
    // first is
    if ($i % 3 == 0) {
        $value .= "fizz";    
    } 
    if ($i % 5 == 0) {
        $value .= "buzz";
    }
    if (strlen($value) == 0) {
        $value .= $i;
    }
    echo $value."\n";
}


?>