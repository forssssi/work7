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
}