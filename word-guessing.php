<?php


$W = "ACTRESS";
$G = "SUCCESS";
// __/_XXX

$t='';
for ($i=0;$i<strlen($W);$i++) {
    // echo strpos($G, $W[$i]);
    // echo $W[$i];
    if ($W[$i] == $G[$i]) {
        $t.='X';
        $G[$i] = '=';
    }
    else if (!strpos($W, $G[$i])) {
        echo $G[$i];
        $t.="/";
        $G[$i] = '=';
    }
    else {
        $t.="_";
        $G[$i] = '=';
    }
}


echo $G . PHP_EOL;
echo $t;