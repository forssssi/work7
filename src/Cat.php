<?php

namespace Animal;

class Cat extends Animal {
    public function makeSound() {
        return "Мяу";
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