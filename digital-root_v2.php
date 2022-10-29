<?php

$numberValue = 85;

while ($numberValue > 9) {
    $numberValue = array_sum(str_split(strval($numberValue))) . PHP_EOL;
}

echo $numberValue;
