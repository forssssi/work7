<?php

require 'vendor/autoload.php';

use Animal\Dog;
use Animal\Cat;

$animalType = readline("Выберите животное (dog/cat): ");

$animal = null;
if ($animalType === "dog") {
    $animal = new Dog();
} elseif ($animalType === "cat") {
    $animal = new Cat();
} else {
    echo "Неизвестное животное!\n";
    exit; 
}

echo $animal->getInfo() . "\n";