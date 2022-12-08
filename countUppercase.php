<?php
$input = 'AlElE';
preg_match_all('/[A-Z]/', $input,$results);
echo count($results[0]);