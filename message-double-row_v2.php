<?php

$MESSAGE = "Hello world!";

$len = strlen($MESSAGE);
for ($i = 0; $i < $len; $i++) {
    echo $MESSAGE[$i] . " " . $MESSAGE[$len - $i -1] . "\n";
}