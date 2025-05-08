<?php
namespace Toys;

require_once 'Toy.php'; 

class Dog extends Toy
{
    public function __construct($name)
    {
        parent::__construct($name);
    }


    public function squeak(): void 
    {
        echo 'Squeak squeak!';
    }
}