<?php

// Interfejsy zachowań

interface LatanieInterface
{
    public function lec(): void;
}

interface KwakanieInterface
{
    public function kwacz(): void;
}

interface PlywanieInterface
{
    public function plywaj(): void;
}



// Implementacje zachowań

class LatamBoMamSkrzydla implements LatanieInterface
{
    public function lec(): void
    {
        echo 'Latam!';
    }
}

class NieLatam implements LatanieInterface
{
    public function lec(): void
    {
        echo 'Nie umiem latać!';
    }
}

class Kwacz implements KwakanieInterface
{
    public function kwacz(): void
    {
        echo 'Kwa, kwa!';
    }
}

class Piszcz implements KwakanieInterface
{
    public function kwacz(): void
    {
        echo 'Pip, pip!';
    }
}

class NieKwacz implements KwakanieInterface
{
    public function kwacz(): void
    {
        echo 'Nie umiem kwakać!';
    }
}

class Plywam implements PlywanieInterface
{
    public function plywaj(): void
    {
        echo 'Pływam po wodzie!';
    }
}

class NiePlywam implements PlywanieInterface
{
    public function plywaj(): void
    {
        echo 'Unoszę się na wodzie!';
    }
}





// Bazowa klasa Kaczka

abstract class Kaczka
{
    protected $kwakanieInterface = null;
    protected $latanieInterface = null;
    protected $plywanieInterface = null;

    public function wykonajKwakanie(): void
    {
        $this->kwakanieInterface->kwacz();
    }

    public function wykonajLatanie(): void
    {
        $this->latanieInterface->lec();
    }

    public function wykonajPlywanie(): void
    {
        $this->plywanieInterface->plywaj();
    }

    abstract public function wyswietl();
}








// Konkretny typ kaczek

class DzikaKaczka extends Kaczka 
{
    public function __construct()
    {
        $this->kwakanieInterface = new Kwacz();
        $this->latanieInterface = new LatamBoMamSkrzydla();
        $this->plywanieInterface = new Plywam();
    }

    public function wyswietl(): void
    {
        echo 'Jestem dziką kaczką!';
    }
}

class GumowaKaczka extends Kaczka
{
    public function __construct()
    {
        $this->kwakanieInterface = new Piszcz();
        $this->latanieInterface = new NieLatam();
        $this->plywanieInterface = new NiePlywam(); 
    }

    public function wyswietl(): void
    {
        echo 'Jestem gumową kaczką!';
    }
}
















// TEST

$dzikaKaczka = new DzikaKaczka();
$dzikaKaczka->wyswietl(); 
$dzikaKaczka->wykonajKwakanie();
$dzikaKaczka->wykonajLatanie(); 
$dzikaKaczka->wykonajPlywanie(); 

echo "\n";

$gumowaKaczka = new GumowaKaczka();
$gumowaKaczka->wyswietl();
$gumowaKaczka->wykonajKwakanie(); 
$gumowaKaczka->wykonajLatanie(); 
$gumowaKaczka->wykonajPlywanie(); 

?>


