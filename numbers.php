<?php

$line = "- + 5 6 8";
// var_dump($line);

preg_match_all('/[*-+\/]/', $line, $matches);

foreach($matches[0] as $match) {
    var_dump($match);
}

