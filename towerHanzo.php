<?php

/*
 * The Towers Of Hanoi
 * PHP
 * Copyright (C) 2001 Amit Singh. All Rights Reserved.
 * http://hanoi.kernelthread.com
 */


function PHP_printmove($from, $to, $i = "")
{
    print "move $from ==> $to\n $i\n";
}

function PHP_movedisk($from, $to, $using, $N, $echo = "")
{
    
    if ($N <= 1) {
        PHP_printmove($from, $to, $echo);
    } else {
        
        PHP_movedisk($from, $using, $to, $N - 1, "diskmove1 ".($N - 1));
        PHP_printmove($from, $to, $echo);
        PHP_movedisk($using, $to, $from, $N - 1, "diskmove2 ".($N - 1));
    }
}


PHP_movedisk("A", "C", "B", 3);