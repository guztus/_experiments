<?php

$numberValue = 85;

function sumDigits ($value) {
    return array_sum(str_split(strval($value)));
}

$numberValue = sumDigits($numberValue);

while ($numberValue > 9) {
    $numberValue = sumDigits($numberValue);
}

echo $numberValue;

