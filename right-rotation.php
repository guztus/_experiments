<?php

// Given a string L (of length N), print out every right rotation of L until it reverts to the original string
// line 1: word
// line 2: word rotated by 1 char to the right
// line 3: word rotated by 2 chars to the right
// ...
// line N: word rotated by N - 1 chars to the right
// line N + 1: word

// Codingame
// eCodingam
// meCodinga
// ...

$word = 'Codingame';
$N = strlen($word);

$letters = str_split($word);

for ($i = 0; $i <= $N; $i++)
{
    echo $word . PHP_EOL;
    array_unshift($letters, end($letters));
    array_pop($letters);
    $word = implode($letters);
}
