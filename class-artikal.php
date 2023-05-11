<?php

class Artikal {
  public $naziv;
  public $cijena;
  public $popust;

  public function __construct($naziv, $cijena, $popust = 0) {
    $this->naziv = $naziv;
    $this->cijena = $cijena;
    $this->popust = $popust;
  }

  public function izracunajCijenu() {
    if ($this->popust > 0 && $this->popust <= 100) {
      $this->cijena = $this->cijena - ($this->popust * $this->cijena / 100);
    }
    return $this->cijena;
  }

  public function ispisiArtikal() {
    echo "<br> Naziv artikla: " . $this->naziv . ", cijena: " . $this->izracunajCijenu() . "KM.";
  }
}

$artikal = new Artikal('patike', 50, 10);
$artikal->ispisiArtikal();

echo "<br>";

$arrayArtikal = array(new Artikal('majica', 20, 5), new Artikal('sesir', 100, 50), new Artikal('carape', 15, 20), new Artikal('biciklo', 100, 50));

foreach($arrayArtikal as $artikal) {
  $artikal->ispisiArtikal();
}

?>