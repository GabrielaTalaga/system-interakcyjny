<?php
namespace Animals;

require_once __DIR__ . '/Animal.php';

class Dog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function bark(): void 
    {
        echo 'Woof woof!';
    }
}


