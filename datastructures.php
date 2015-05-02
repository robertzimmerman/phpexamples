<?php

function LongestWord($sen) {  

  // code goes here
  $finalWord = $tempWord = "";
  $strlen = strlen($sen);
  for ($i = 0; $i <= $strlen; $i++) {
    echo $tempWord;
    if ($i == " ") {
      if (count($tempWord) > count($finalWord)) {
        $finalWord = $tempWord;
      }
      $tempWord = "";
    } else {
       $tempWord = $tempWord . substr($sen, $i, 1); 
    }
  }
  
  
  return $tempWord; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo LongestWord(fgets(fopen('php://stdin', 'r')));  

?> 


/**O(n log n) === factorial method < O(n2)
echo "O (n log n)";
$n = 3;
$cntB = 0;
$cntS = 0;
for ($b = 0; $b < $n; $b++) {
    $cntB++;
    for ($s = $b; $s < $n; ($s = round($s/2))) {
         $cntS++;
    }
}

echo "Counter B = $cntB \n";
echo "\n";
echo "Counter S = $cntS \n";
**/
/**
// example of O(n^2)
$n = 10;
$cntB = 0;
$cntS = 0;
for ($b = 0; $b < $n; $b++) {
    $cntB++;
    for ($s = $b+1; $s < $n; $s++) {
         $cntS++;
    }
}

echo "Counter B = $cntB \n";
echo "\n";
echo "Counter S = $cntS \n";
**/
?>