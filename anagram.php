<?php

  // anagram
    /**
     * anagram is a word or phrase that can be changed order to make another word
     *
     * needed: string length - remove any spaces
     * check if characters match each other
     *
     * TODO: better to try and not use array manipulation as they can be expensive
     *
     **/
    
    function checkString($string1, $string2) {
        if (strlen($string1) == strlen($string2)) {
            return true;
        }
        return false;
    }
    
    function characterCount($stringCount = null) {
        // we need to place each in an array and count each one (say "a"
        // is called 2 and then order them , key is character and value is count
        $charCount = array();
        $count = 1; // static
        if ($stringCount != null) {
            $arrString = str_split($stringCount);
            print_r($arrString);
            foreach ($arrString as $k => $letter) {
                echo $letter . " being checked from \n";
                print_r($charCount);
                if (isset($charCount[$letter])) {
                    echo "is this a dup ".$letter;
                    $charCount[$letter] = $charCount[$letter] + 1;
                } else {
                    // this is new
                    $charCount[$letter] = $count;
                }
            }
            print_r($charCount);
        return $charCount;
        }
        return false;
    }
    
    function checkCharacterComparison($string1, $string2) {
        $arr1 = characterCount($string1);
        $arr2 = characterCount($string2);
        
        if ($arr1 && $arr2) {
            foreach ($arr1 as $key => $cnt) {
                if (!isset($arr2[$key])) {
                   return false;
                }
                if ($arr2[$key] != $cnt) {
                    return false;
                }
            }
        }
        
        return true;
    }
  
  
    function mainAnagram($string1, $string2) {
        if (checkString($string1, $string2)) {
            // if string comparison on count characters is good
            if (checkCharacterComparison($string1, $string2)) {
                echo $string1." is a anagram with ".$string2;
            } else {
                echo "string is not an anagram";
            }
        } else {
            echo "string count is different they are not Anagrams";
        }
    }
    
    $hen = array("h", "p", "y");
    print_r($hen);
    if (in_array("s", $hen)) {
        echo "yes \n";
    } else {
        echo "no \n";
    }
    
    mainAnagram("pphhjijiknknji", "pphhjijiknknji");
    
?>