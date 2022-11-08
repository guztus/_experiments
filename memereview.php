<?php

$n = "nyan cat";
$w = array_unique(str_split($n));
$w = array_map('trim', $w);

$m = 0;
$l = 0;

foreach ($w as $ss) {
    if (ctype_alnum($ss)) {
        $m += ord($ss);
    }
}

var_dump($m);

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