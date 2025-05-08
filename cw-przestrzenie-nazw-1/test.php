<?php

require_once __DIR__ . '/Animals/Animal.php';
require_once __DIR__ . '/Animals/Dog.php';
require_once __DIR__ . '/Toys/Toy.php';
require_once __DIR__ . '/Toys/Dog.php';

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
