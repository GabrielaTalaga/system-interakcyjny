<?php
namespace Toys;

class Toy
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

    public function play(): void
    {
        echo $this->name . ' is fun to play with!';
    }
}


