<?php
// reverse a string

// iteration
function reverseString1($str) {

   $len = strlen($str);
   
   $append = "";
   for ($i = $len - 1; $i >= 0; $i--) {
        $append .= $str[$i];
   }
    
    return $append;
}


// recursion
function reverseString2($str, $append  = "") {
    // we need a base case
    $len = strlen($str);
    echo $len . "\n";
    if ($len < 2) {
        
        $append .= $str;
        echo "do we get here with what is left in str $str & $append \n";
        return $append;
    }
    
    
    $append .= substr($str, $len - 1, 1);
    
    echo "added append $append \n";
    
    $str = substr($str, 0, -1);
    
    return reverseString2($str, $append);
    
}
echo "hi there bob \n";
$rev =  reverseString2("hi there bob")."\n";
echo $rev;
$str = "hi there man";
$len = strlen($str);
echo substr($str, $len - 1, 1)."\n";



?>