<?php


// rules -
// number is divisble by 2 if so then take value of that and see if div by 2 and so on.. till you can't
// you can see if factors by checking if number is divisblie by total digit
/**
 *  example
 *  50 / 2
 *   yes = 25
 *   now is 25 div by 2
 *   no increase div to 3
 *  faster way is - does 25 3 no... 4 no... 5 yes with 5 / 5
 *  so factors are 2, 2, 5, 5 and GCF is 5 5
 */


 
$graph = array(
            array(0, 1, 1, 0, 0, 0),
            array(1, 0, 0, 1, 0, 0),
            array(1, 0, 0, 1, 1, 1),
            array(0, 1, 1, 0, 1, 0),
            array(0, 0, 1, 1, 0, 1),
            array(0, 0, 1, 0, 1, 0),
         );
 
function init($visited, $graph){
 
    foreach ($graph as $key => $vertex) {
        $visited[$key] = 0;
    }
}
 
function breadthFirst($graph, $start, $visited){
 
    $visited = array();
    $queue = array();
 
    init($visited, $graph);
    array_push($queue, $start);
    $visited[$start] = 1;
 
    while (count($queue)) {
 
        $t = array_shift($queue);
 
        foreach ($graph[$t] as $key => $vertex) {
 
            if (!$visited[$key] && $vertex == 1) {
                $visited[$key] = 1;
                array_push($queue, $key);
            }
        }
    }
    print_r($visited);
}
 
breadthFirst($graph, 5);




?>