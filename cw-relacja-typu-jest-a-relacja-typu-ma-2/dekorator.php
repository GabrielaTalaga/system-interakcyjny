<?php

interface Pizza {
    public function getDescription(); //Pizza to interfejs – mówi, że każda pizza ma mieć getDescription().
}


class BasicPizza implements Pizza {
    public function getDescription() {
        return "Ciasto z sosem pomidorowym"; //basic wyjściowa pizza, każda to ma mieć
    }
}

//dekoratory dodające nowe rzeczy do istniejących
class CheeseDecorator implements Pizza {
    private $pizza;

    public function __construct(Pizza $pizza) {
        $this->pizza = $pizza;
    }

    public function getDescription() {
        return $this->pizza->getDescription() . ", ser";
    }
}

class MushroomDecorator implements Pizza {
    private $pizza;

    public function __construct(Pizza $pizza) {
        $this->pizza = $pizza;
    }

    public function getDescription() {
        return $this->pizza->getDescription() . ", pieczarki";
    }
}

// robienie pizzy:
$myPizza = new BasicPizza();
$myPizza = new CheeseDecorator($myPizza);
$myPizza = new MushroomDecorator($myPizza);

echo $myPizza->getDescription(); // wypisuj: Ciasto z sosem pomidorowym, ser, pieczarki

?>
