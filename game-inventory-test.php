<?php

$sentence1 = explode(' ', str_replace(',', '', "INVENTORY helmet, gloves TOTALS 50 GOLD"));
// INVENTORY helmet, gloves TOTALS 116 GOLD

var_dump(array_diff($sentence1, ['helmet']));