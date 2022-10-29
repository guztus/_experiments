<?php

$line1 = "Hello World!";
$line2 = "!dlloW olreH";

$s1 = str_split($line1);
$s2 = str_split(strrev($line2));

$iteration = 0;
$replacements = 0;

forEach ($s1 as $letter) {
    if ($letter !== $s2[$iteration]) {
        echo $letter;
        $replacements++;
    }
    $iteration++;
}

echo $replacements;