<?php

$MESSAGE = "Hello world!";

$num1 = str_split($MESSAGE);
$num2 = str_split(strrev($MESSAGE));

for ($i = 0; $i < strlen($MESSAGE); $i++) {
    echo $num1[$i] . " " . $num2[$i] . "\n";
}
