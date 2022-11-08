<?php

$n = "nyan cat";

$m = 0;
$l = 0;

var_dump(preg_match_all('/[a-z]/', $n,$matches));
$w = array_unique($matches[0]);

foreach ($w as $ss) {
    $m += ord($ss);
}

$k = strlen($n);
$r = $m % $k;

if ($r > 10) {
    echo "10/10";
    return;
}
if ($l < 0) {
    echo "0/0";
    return;
}
echo $r . "/10";