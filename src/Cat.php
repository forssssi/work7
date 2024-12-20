<?php

namespace Animal;

class Cat extends Animal 
{
    public function makeSound(): string
    {
        return "Мяу";
    }

    public function getType(): string
    {
        return "Млекопитающее";
    }

    public function processInput($input): string 
    {
        if (is_numeric($input)) 
        {
            return (int)$input;
        }
        return (string)$input;
    }
}