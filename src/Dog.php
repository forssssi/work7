<?php

namespace Animal;

class Dog extends Animal {
    public function makeSound() {
        return "Гав";
    }

    public function getType() {
        return "Млекопитающее";
    }

    public function processInput($input) {
        if (is_numeric($input)) {
            return (int)$input;
        }
        return (string)$input;
    }
}