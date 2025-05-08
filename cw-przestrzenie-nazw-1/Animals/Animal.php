<?php
namespace Animals;

class Animal
{

    protected $name;

    public function __construct($name)
    {
        $this->name = (string) $name;
    }

    public function getName(): string 
    {
        return $this->name;
    }
}


