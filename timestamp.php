<?php

$timestamp = time();
$date = date('D-M-Y', $timestamp);
var_dump($date);
echo date('d-M-Y-z B T', strtotime('last Monday'));