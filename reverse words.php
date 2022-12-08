<?php

$line = "Hello, How Are, You?";
$lineCopy = $line;

$lineCopy = preg_replace('/[.,?!]/', ' ', $lineCopy);

// result should be "olleH, woH erA, uoY?"

$explodedLine = explode(' ', $lineCopy);

$sentence = [];
foreach ($explodedLine as $word) {
    $sentence [] = strrev($word);
}

$sentence = implode(' ', $sentence);

preg_match_all('/[.,?!]/', $line, $matches);

foreach ($matches[0] as $match) {
    $strPos = strpos($line, $match);

    $sentence[$strPos] = $match;

    $line[$strPos] = ' ';
}

echo $sentence;
