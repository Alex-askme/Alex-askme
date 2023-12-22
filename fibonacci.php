<?php

//1 2 3 4 5 6 7 8  9  10    step
//0 1 1 2 3 5 8 13 21 34    result

$cache = [];
function fib($x) {

    global $cache;

    if ($x <= 0) return 'Cheater!';
    if ($x == 1) return 0;
    if ($x == 2) return 1;
    if ( !empty($cache[$x]) ) { return $cache[$x]; }

    $cache[$x] = fib ($x -1) + fib ($x - 2);

    return $cache[$x];
}

echo fib(32);