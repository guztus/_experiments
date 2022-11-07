<?php

class Dog {
    public $name;

    public function __clone() {
        $this->cloned = true;
    }
}

$roger = new Dog();
$roger->name = 'Roger';

echo $roger->cloned;

$syd = clone $roger;
echo $syd->cloned;

