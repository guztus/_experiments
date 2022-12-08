<?php

$sentence = 'Hello,';

preg_match_all('/[a-z]/', $sentence, $matches);
echo count($matches[0]);