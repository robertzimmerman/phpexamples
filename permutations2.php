<?php

$str = "abc";

$len = strlen($str);

function permutation($str, $idx, $len, $log) {
    printf("%s\n",$log);
    $i = 0;
    
    if ($idx == $len) {
        printf("%s\n",$str);
    } else {
        for ($i = $idx; $i < $len; $i++) {
            // swap
            $str = swap($str, $idx, $i, 'we are first swap');
            permutation($str, $idx+1, $len, 'we are permutation');
            $str = swap($str, $idx, $i, 'we are second swap');
        }
    }
    
}

function swap($str, $idx, $i, $log) {
    printf("%s\n",$log);
    $tmp = $str[$idx];
    $str[$idx] = $str[$i];
    $str[$i] = $tmp;
    return $str;
}

//permutation($str, 0, $len, $log = '');

function testPerm($i, $len, $iter) {
    
    printf("function being called %s of times \n", $iter++);
    
    if ($i == $len) {
        printf("%s\n", $i);
        return;
    } else {
        
        printf("before testPerm calls itself - %s\n", $i);
        testPerm($i + 1, $len, $iter);
        printf("after testPerm calls itself - %s\n", $i);
    }
}

testPerm(0, 10,0);

function find_in_arr($key, $arr, $i) {
    
    
    printf("searching for %s in \n",$key);
    print_r($arr, TRUE);
   
    
    
    foreach ($arr as $k => $v) {
        if ($k == $key) {
            return $v;
        }
        if (is_array($v)) { /* this checks if child is a parent to others */
            $result = find_in_arr($key, $v);
            if ($result != false) {
                return $result;
            }
        }
    }   
    return false;
}

?>