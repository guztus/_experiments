<?php

// You are given a patient. Every patient has a unique amount of teeth. Each tooth is either
// healthy 1, rotten 0 or pulled out -. Pull out any rotten teeth you find.
//
// (not using here) Line 1: Integer N for the amount of rows of teeth in a mouth
// (not using here) Next N lines: Rows of teeth
//
// Output the entire mouth of the patient after you have pulled out all the rotten teeth
//
// Input:
// 2
// --------1--------
// --------0--------
//
// Output:
// --------1--------
// -----------------

$rows = [
    ['---111--0----0---'],
    ['---11-0111-------'],
    ['--000-11--0------'],
    ['---0001--0-111---']
];

$row = $rows[rand(0, count($rows) - 1)];

echo str_replace('0','-', implode('', $row)) . PHP_EOL;
