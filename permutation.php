<?php

    // permutation
   
    // permutation is a sequence of combinations
    // exampl aba aab baa
   
    // we need to move the index around in a look
    // break them by character and move them.
   
    // basically need a formula do fo the (n)(n - 1)(n - 2)... (n - k + 1) = n!/(n - k)! where n is the length of string and k is the set
    // this would help suggest that there are this many combinations
    // but to do the print out seems like its brute force
    function permuteUnique($items, $perms = [], &$return = [], $counter = 0) {
        
        print("Permutation Started again ".$counter."\n");
        
        print("Items:\n");
        
        print_r($items);
        
        print("perms :\n");
        
        print_r($perms);
        
        print("return:\n");
        
        print_r($return);
        
        if (empty($items)) {
            print("Items are empty ... perms go to return");
            
            $return[] = $perms;
            print_r($return);
        } else {
            //sort($items);
            print("Items are: \n");
            print_r($items);
            $prev = false;
            for ($i = count($items) - 1; $i >= 0; --$i) {
                $newitems = $items;
                 print("this is new items before loop ..: ");
                print_r($newitems);
                $tmp = array_splice($newitems, $i, 1)[0];
               
                
                print("sliced to see what array we have \n");
                print("temp : $tmp \n");
                
                print("prev : $prev \n");
                
                if ($tmp !== $prev) {
                    $prev = $tmp;
                    $newperms = $perms;
                    
                    array_unshift($newperms, $tmp);
                    print("new PERMS \n");
                    print_r($newperms);
                    print("new Items \n");
                    print_r($newitems);
                    permuteUnique($newitems, $newperms, $return);
                }
            }   
            return $return;
        }
    }

    $permutations = permuteUnique(["a","b","c"]);
    print_r($permutations)
?>