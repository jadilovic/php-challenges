<?php

class Automobil {
  public $marka;
  public $model;
  public $godinaProizvodnje;
  public $cijena;

  public function __construct($marka, $model, $godinaProizvodnje, $cijena) {
    $this->marka = $marka;
    $this->model = $model;
    $this->godinaProizvodnje = $godinaProizvodnje;
    $this->cijena = $cijena;
  }

  public function prikaziSpecifikacije() {
    echo "<br> Marka automobila je : " . $this->marka;
    echo "<br> Model automobila je : " . $this->model;
    echo "<br> Godina proizvodnje automobila je : " . $this->godinaProizvodnje;
  }

  public function prikaziInformacije() {
     echo "<br> Ovo je : " . $this->marka . " " . $this->model . " iz " . $this->godinaProizvodnje . " godine, cijena je " . $this->cijena . ".";
  }
}

// class SportskiAutomobil extends Automobil {
//   public $brojVrata;

//   public function __construct($marka, $model, $godinaProizvodnje, $cijena, $brojVrata){
//     parent::__construct($marka, $model, $godinaProizvodnje, $cijena);
//     $this->brojVrata = $brojVrata;
//   }

//   public function prikaziSpecifikacije(){
//     parent::prikaziSpecifikacije();
//     echo "<br> Broj vrata automobila je : " . $this->brojVrata;
//   }

// }

$auto = new Automobil("VW", "Golf", 2004, 4);
$auto->prikaziSpecifikacije();

// $sportskiAuto = new SportskiAutomobil("Audi", "TT", 1999, 2, 3000);
// $sportskiAuto->prikaziSpecifikacije();

$auto1 = new Automobil("Opel", "Corsa", 2012, 9000);
$auto2 = new Automobil("Toyota", "Corolla", 2002, 1666);
$auto3 = new Automobil("Ford", "Focus", 2022, 3444);

$auto1->prikaziInformacije();
$auto2->prikaziInformacije();
$auto2->prikaziInformacije();

?>