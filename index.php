<?php

$numbers = [2,3,4,5,6,7,8,9];

$numbersList = '1234';

function odd($var)
{
    // returns whether the input integer is odd
    return $var % 2 !== 0;
}

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

echo implode('', array_filter($numbers, "odd"));

var_dump(str_split($numbersList));