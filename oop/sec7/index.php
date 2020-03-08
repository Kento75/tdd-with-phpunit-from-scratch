<?php

class Animal {
    public $weight;

    public function eat()
    {
        var_dump("All animals can eat");
    }

    public function reproduce()
    {
        var_dump("All animals can reproduce");
    }
}

class Mammal extends Animal {
    public $heartRate;

    public function breathe()
    {
        var_dump("I can breathe because I am a Mammal");
    }
}

class Dog extends Mammal {
    public $color;

    public function bark()
    {
        var_dump("I can bark!" . strtolower(get_class()));
    }

    public function chase()
    {
        var_dump("I am chasing a Rabbit");
    }
}

header("Content-Type:text/plain", true);

$brown = new Dog;
$brown->weight = "4.3";
$brown->color = "red";
$brown->heartRate = "okay";

echo $brown->weight . PHP_EOL . $brown->color . PHP_EOL . $brown->heartRate . PHP_EOL;

$brown->eat();
$brown->breathe();
$brown->bark();
$brown->chase();
$brown->reproduce();