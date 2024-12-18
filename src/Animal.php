<?php

namespace Animal;

abstract class Animal {
    abstract public function makeSound();

    public function getType() {
        return get_class($this); 
    }

    public function getInfo() {
        return $this->getType() . ": " . $this->makeSound();
    }

    abstract public function processInput($input);
}




