<?php

// Interfejs wspolny dla wszystkich figur
interface Shape {
    public function getName(): string;

    public function calculateArea(): float;
}

// Prostokąt implementujący  Shape
class Rectangle implements Shape {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }


    public function getName(): string {
        return "Prostokąt";
    }

    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}

// Kwadrat dziedziczy po prostokącie
class Square extends Rectangle {
    public function __construct(float $side) {
        parent::__construct($side, $side);
    }


    public function getName(): string {
        return "Kwadrat";
    }
}

// Trójkat implementuje Shape
class Triangle implements Shape {
    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getName(): string {
        return "Trójkąt";
    }

    public function calculateArea(): float {
        return 0.5 * $this->base * $this->height;
    }
}


// Koło implementuje Shape
class Circle implements Shape {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getName(): string {
        return "Koło";
    }

    public function calculateArea(): float {
        return pi() * pow($this->radius, 2);
    }
}






// TEST
$shapes = [
    new Rectangle(width: 4, height: 6),
    new Square(side: 5),
    new Triangle(base: 3, height: 8),
    new Circle(radius:3)
];

foreach ($shapes as $shape) {
    echo $shape->getName() . " - pole: " . $shape->calculateArea() . "\n";
}




