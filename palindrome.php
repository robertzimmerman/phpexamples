<?php
//  palindrome
    /**
     * palindrome is a word(s) that can be reversed and still be spelled the original way
     *
     * 1. check if the string is the same amount of characters (excluding spaces) - only *** if there is 2 strings
     * 2. since it can go reverse / you should be able to check if first middle and last
     * for faster checking, if string is odd you can take the first part all say if 7 take first 3 and reverse it
     * and see if it is the same as the last 3 (remove space)
     * 3. if word is even say 8, split in 3 segments, 3,2,3 and check indext first 3 to match last 3 (reverse) and switch the 2 in the middle
     * TODO: try number 3
     **/
    
    // check if palindrome (string) 1 // this is brute force. big O(n)
    function palindromeCheck($string1) {
        $deccnt = $j = 0;
        $inccnt = 0;
        // count string
        for ($i = strlen($string1) - 1; $i >= 0; $i-- /*decrease to the new word*/) {
            // get first and last then count change
            
            echo "String Beginning : ".$string1[$j]."\n";
            echo "String Ending : ". $string1[$i]."\n";
            if ($string1[$i] == $string1[$j]) {
                $j++; 
                continue;
            } else {
                echo "we did not have a palindrome word";
                return false;
            }
             // increase to the new word
        }
        
        echo $string1 . " is a palindrome word";
        return true;
        
        
    }
    
    //palindromeCheck("nursessrun");

    /**
     *  Lesser lines but still using strrev only thing efficient is cutting the word in half
     **/
    function palindromeBetterCheck($string1) {
        // this one makes the string in half then just rev the string to see if they match
        $strlen = strlen($string1);
        $middle = round($strlen / 2);
        
        $substr1 = substr($string1, 0, ($middle));
        
        $substr2 = substr($string1, $strlen - ($middle), $strlen);
        
        if ($substr1 == strrev($substr2)) {
            echo "It is a palindrome";
        }
        echo $substr1."/n";
        echo $substr2."/n";
        
    }
    
    //palindromeBetterCheck("anba");
    
    // find the longest palindrome
    function findLongestPalindrome() {
        $string = 'FourscoreandsevenyearsagoourfaathersbroughtforthonthiscontainentanewnationconceivedinzLibertyanddedicatedtothepro
        positionthatallmenarecreatedequalNowweareengagedinagreahtcivilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedic
        atedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoher
        egavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsec
        ratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldad
        swfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinish
        edworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromtheseho
        noreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothave
        diedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth';

        function isPalendrone($string) {
            return $string == strrev($string);
        }

        $longest = '';
        $length = strlen($string);

        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $length - $i; $j > 1; $j--) {
                if (isPalendrone(substr($string, $i, $j))) {
                    $new = substr($string, $i, $j);
                    if (strlen($new) > strlen($longest)) $longest = $new;
                        break;
                }
            }
        }
        echo "<br /><br/>The longest was: ".$longest."<br /> which is ".strlen($longest)." chars long";
    }
    
    findLongestPalindrome();
     
     
?>