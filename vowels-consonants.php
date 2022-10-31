<?php

$S = 'Astrobytes'; // shld be 4

$matchesV = '';
$matchesC = '';

$S = strtolower($S);
$matchesV = preg_match_all('/[aeiou]/', $S);
$matchesC = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/', $S);

echo (abs($matchesV - $matchesC));
