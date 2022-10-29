<?php

$T =  '0011011';
$T2 = '1101010';

$splitT = str_split($T);

$iteration = 0;

foreach ($splitT as $character) {
    echo (intval($character) || intval($T2[$iteration]) ? 1 : 0);
    $iteration++;
}

