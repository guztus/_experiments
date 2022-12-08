<?php
fscanf(STDIN, "%d", $st);
$s =[];
function Fibonacci($n,$s){
    $n1 = 1;
    $n2 = 1;
    $cn = 0;
    while ($cn < $n){$s []= $n1;$n3 = $n2 + $n1;$n1 = $n2;$n2 = $n3;$cn = $cn + 1;}
    return array_reverse($s);
}

echo (implode(' ',Fibonacci(st, $s)));