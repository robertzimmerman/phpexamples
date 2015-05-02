<?php

    echo "hi there";
    // lets get a couple working
    
    function interativeStringReverse($stringInput = null) {
        if ($stringInput != null) {
            // lets reverse for for loop
            $nextLetter = "";
            $prevLetter = "";
            $letterArrayReverse = array();
            
            $letterArrayReverse = str_split($stringInput);
            echo "Original String : " . $stringInput ."\n";
            for ($i = strlen($stringInput) - 1; $i >= 0; $i--) {
                // lets just pring out the reverse
                echo $letterArrayReverse[$i] ."\n";
            
            }
        }
        return $stringInput;
    }
    
    interativeStringReverse("This is awesome");

    
    // reverse a string iteratively without functions
    function reverse_string($s) {
        $i = 0;
        $rev = '';
        while ( $s[$i] ) {
                $i++;
        }
        $i--;
        while ( $s[$i] ) {
                $rev .= $s[$i];
                $i--;
        }
        return $rev;
    }
    
    $mash = "helo me help";
    echo "this is from what index " . $mash[3] . " ------  \n";
    
    echo reverse_string("Homo Man");
    
    
    
    ///////// timestamp
    function CountingMinutesI($str) {  

  // code goes here
  $times = explode('-', $str);
  print_r($times);
  $minutes = array();
  for($i = 0 ; $i < 2; $i++){
    $time = $times[$i];
    $parts = explode(':', $time);
    $parts[2] = substr($parts[1], -2);
    
    $parts[1] = substr($parts[1], 0, -2);
    $parts[0] = $parts[0] % 12;
    print_r($parts);
    $minutes[$i] = (int) $parts[1] + 60 * ($parts[0] + 12 * ($parts[2] == 'pm' ? 1 : 0));
    
  }
  return ($minutes[1] - $minutes[0] + 24 * 60) % (24 * 60); 
  }
  
  function ExOh($str) {  

  // code goes here
  $cntX = 0;
  $cntO = 0;
  $len = strlen($str);
  for($i = 0; $i < $str; $i++) {
    if ($str[$i] == 'x') {
      $cntX++;
    } else {
      $cntO++;
    }
  }
  if ($cntX == $cntO) {
    return "true"; 
  }
  return "false"; 
         
}


function Palindrome($str) {  

  // code goes here
  // remove spaces
  $str = str_replace(' ','',$str);
  $len = strlen($str);
  echo " len $len\n";
  $half_len = floor($len / 2);
  
  echo "1/2 len $half_len\n";
  for ($i = 0; $i < $half_len; $i++) {
    $cmp = $str[($len - 1 - $i)];
    echo "this is end letter $cmp";
    if ($str[$i] != $cmp) {
      return "false"; 
    } 
  }
  
  return " this is true palidrom \n"; 
         
}

echo Palindrome("civic");
   
   
   
 function RunLength($str) {  

  // code goes here
  $len = strlen($str);
  $cnt = 0;
  $letter = null;
  $fullString = '';
  
  for ($i = 0; $i <= $len; $i++) {
    if ($letter == null) {
      $letter = $str[$i];
      $cnt++;
    } else if ($letter == $str[$i]){
      $cnt++;
    } else {
      $fullString .= $cnt.$letter;
      $cnt = 1;
      $letter = $str[$i];
    } 
  }
  
  return $fullString; 
         
}  
   
   

function PrimeMover($num) {  

  // code goes here
  $cnt = 0;
  do{
    $cnt++;
    if (($cnt / 2) == 1) {
      $num--; 
    }
  }while($num > 0);
    
  return $cnt;       
}
      

   
   



echo ExOh("xxoox");
  
  
  
  echo CountingMinutesI("10:00am-12:00pm");
?>