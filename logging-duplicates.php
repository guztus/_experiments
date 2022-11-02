<?php

//fscanf(STDIN, "%d", $N);
$X = [1,1,2,3,4,5,6,7,7,-9,-99,-99];
$N = count($X);

for ($i = 0; $i < $N; $i++)
{
//    fscanf(STDIN, "%d", $X);
    $tst []= $X[$i];
}

foreach(array_count_values($tst) as $val => $c) {
    if($c > 1) {
//        var_dump(array_count_values($tst)) . "\n";
//        echo "val " . $val . "\n";
//        echo "c " . $c . "\n";

//        $dups[] = $c;
        echo $val . PHP_EOL;
    }
}