<?php

$names = 'Obama Obama Prince-Charles Queen Queen Queen Prince-Charles Obama Obama Obama Queen';

$namesExpl = explode(' ', $names);

$biggestDonation = 0;
$biggestDonator = '';

foreach ($namesExpl as $name) {
    $thisDon = substr_count($names, $name);
    if ($thisDon == $biggestDonation) {
        $biggestDonator = 'conspiracy';
    } else if ($thisDon > $biggestDonation) {
        $biggestDonation = substr_count($names, $name);
        $biggestDonator = $name;
    }
    $names = str_replace($name, '', $names) . PHP_EOL;
}

echo("{$biggestDonator}\n");

