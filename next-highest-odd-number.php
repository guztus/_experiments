<?php

// M amount of values. Each value is an integer N. You must print the next highest odd number
// unless N is already odd (then print N).
//
// For values       -64 71 -98 -60 -18 41 88 -2 -24 63
// Output should be -63 71 -97 -59 -17 41 89 -1 -23 63

$values = [-64, 71, -98, -60, -18, 41, 88, -2, -24, 63];
$M = count($values);

for ($i = 0; $i < $M; $i++) {
    $N = $values[$i];
    echo $N % 2 == 0 ? $N + 1 . ' ' : $N . ' ';

//    if ($N % 2 == 0) {
//        echo $N + 1 . ' ';
//    } else {
//        echo $N . ' ';
//    }
}