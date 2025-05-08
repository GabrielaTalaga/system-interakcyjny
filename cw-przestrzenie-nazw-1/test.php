<?php

require_once 'Animal.php'; 
require_once 'DogAnimal.php';
require_once 'Toy.php';
require_once 'DogToy.php';

use Animals\Dog as RealDog;
use Toys\Dog as ToyDog;

$realDog = new RealDog('Admiral');
echo 'Real dog: ' . $realDog->getName() . PHP_EOL;
$realDog->bark();
echo PHP_EOL;

$toyDog = new ToyDog('Rubber Dog');
echo 'Toy dog: ' . $toyDog->getName() . PHP_EOL;

$toyDog->squeak();
echo PHP_EOL;

$toyDog->play();
echo PHP_EOL;
