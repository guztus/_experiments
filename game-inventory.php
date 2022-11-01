<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$COMANDINIT [] = "ADD pants 25";
$COMANDINIT [] = "INVENTORY";

$COMANDINIT [] = "ADD shirt 99";
$COMANDINIT [] = "INVENTORY";

$COMANDINIT [] = "REMOVE pants";
$COMANDINIT [] = "INVENTORY";

$COMANDINIT [] = "ADD pants 24";
$COMANDINIT [] = "INVENTORY";

$LINECOUNT = count($COMANDINIT);

$inventory = [];
$inventoryCost = [];

for ($i = 0; $i < $LINECOUNT; $i++)
{
    $COMMAND = $COMANDINIT[$i];

    $splt = explode(' ', $COMMAND);

    if (strpos($COMMAND, 'ADD') !== false) {
        $inventory []= $splt[1];
        $inventoryCost []= $splt[2];
    }
    if (strpos($COMMAND, 'INVENTORY') !== false) {
        $totals = array_sum($inventoryCost);
        $imploded = implode(', ', $inventory);

        echo "INVENTORY {$imploded} TOTALS {$totals} GOLD\n";
    }
    if (strpos($COMMAND, 'REMOVE') !== false) {
        $sentence1 = explode(' ', $COMMAND);
        array_shift($sentence1);

        $inventory = array_diff($inventory, $sentence1);
        var_dump($inventoryCost);
//        var_dump($COMMAND);
//        var_dump($sentence1);
//        var_dump($inventory);



//        var_dump(array_diff($sentence1, $inventory));
//          $inventory = array_diff($sentence1[1], $inventory);
//        var_dump($COMMAND[]);
    }
//    var_dump($inventory);
}
