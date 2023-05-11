<?php

class Osoba {
  public $ime;
  public $prezime;
  public$datumRodjenja;

  public function __construct($ime, $prezime, $datumRodjenja) {
    $this->ime = $ime;
    $this->prezime = $prezime;
    $this->datumRodjenja = $datumRodjenja;
    $this->pozdrav();
  }

  public function __destruct(){
    echo "<br> Objekt " . $this->ime . " " . $this->prezime . " je unisten!";
  }

  public function pozdrav() {
    echo "<br> Pozdrav ja sam " . $this->ime . " " . $this->prezime . ". Moj datum rodjenja je " . $this->datumRodjenja . "!";
  }
}

$osoba = new Osoba("Ana", "Anic", "10.01.1990");
$osoba1 = new Osoba("Adis", "Hodzic", "10.01.1991");
$osoba2 = new Osoba("Boby", "Bobic", "10.01.1992");
// $osoba->pozdrav();

foreach ($osoba as $key => $value) {
  echo "<br> $key is $value";
}

// unset($osoba1);

$osoba1->pozdrav();

?>