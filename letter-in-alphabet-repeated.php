<?php

$n = 5;

$rng = range('A', 'Z');

$letter = $rng[$n -1];

echo str_repeat($letter, $n);