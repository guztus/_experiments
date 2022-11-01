<?php

$command = explode(' ', "ADD pants 24");
$command2 = explode(' ', "ADD shirt 80");


$inventory = [];

$inventory[] = ['command' => $command[0], 'item' => $command[1], 'cost' => $command[2]];
$inventory[] = ['command' => $command2[0], 'item' => $command2[1], 'cost' => $command2[2]];

//$totalCost = $inventory[0][0];

var_dump($inventory[0]['cost']);


// ADD cost to totalcost when you add item + ['cost']
// ADD item to items when you add item + ['item']
// REMOVE cost from totalcost when you remove the item - ['cost'] --- but you would need to find 'shirt'
// REMOVE item from items when you remove item - ['item'] // Get the array iD for shirt and remove ['item']
// Get the array ID for 'shirt' and remove it completely -- not wokring

