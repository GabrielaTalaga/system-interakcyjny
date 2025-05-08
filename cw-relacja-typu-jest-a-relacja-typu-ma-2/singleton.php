<?php

class Fridge {
    
    private static $instance = null; // jedyna lodówka, którą mamy 

    public $temperature = 5; // domyślna temperatura

    private function __construct() {
        // konstruktor jest prywatny,  nikt nie może stworzyć innej lodówki
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Fridge(); // jeśli lodówki jeszcze nie ma, tworzymy
        }
        return self::$instance; // zwracamy tą jedyną lodówkę
    }
}



//używamy lodówki:
$myFridge = Fridge::getInstance(); // bierzemy lodówkę
$myFridge->temperature = 3;        // ustawiamy temperaturę


$anotherFridge = Fridge::getInstance(); // próba wzięcia drugiej
echo $anotherFridge->temperature;       // pokaże 3, bo to ta sama lodówka

?>

