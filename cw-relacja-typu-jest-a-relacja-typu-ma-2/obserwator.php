<?php

interface Observer {
    public function update($message); //kazdy obserwator ma miec metode update
}

class User implements Observer { //to uzytkownik, który posiada interface observera
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }


    public function update($message) {
        echo $this->name . " dostał wiadomość: " . $message . "\n"; //zwraca się wynik
    }
}

class Newsletter { //tzyma liste obserwatorow, ktorzy sa przypisywani jako subskrybenci
    private $subscribers = [];

    public function subscribe(Observer $observer) {
        $this->subscribers[] = $observer;
    }

    public function notifyAll($message) {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($message);
        }

    }


}

// użytkownicy:
$maria = new User("Maria");
$karol = new User("Karol");

$newsletter = new Newsletter();
$newsletter->subscribe($maria);
$newsletter->subscribe($karol);



// wysyłamy wiadomość
$newsletter->notifyAll("To jest wiadomosc dla subskrybentów");

?>







