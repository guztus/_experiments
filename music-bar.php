<?php

$l = "03:32";
$p = "01:00";

$totalLength = explode(":", $l);
$played = explode(":", $p);

$totalLength[0] *= 60;
$played[0] *= 60;

$progress = round((array_sum($played) / array_sum($totalLength))* 15);
$progressBar = str_repeat('-', $progress);
$progressBarEmptiness = str_repeat(' ', (15 - $progress));

echo str_repeat("*", 17) . "\n";
echo "*{$progressBar}" . "{$progressBarEmptiness}" . "*\n";
echo str_repeat("*", 17)  . "\n";
