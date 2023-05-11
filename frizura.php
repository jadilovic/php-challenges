<?php 

function izracunajCijenu($duzinaKose) {
  // if ($duzinaKose < 10) {
  //   return 50;
  // } elseif ($duzinaKose >= 10 && $duzinaKose < 20) {
  //   return 70;
  // } else {
  //   return 90;
  // }
  switch ($duzinaKose) {
    case ($duzinaKose < 10):
      return 50;
      break;
    case ($duzinaKose >= 10 && $duzinaKose < 20):
      return 70;
      break;
    default:
      return 90;
      break;
  }
}

$klijentiArr = array(
  array("ime" => "Selma Kovacevic", "duzina" => 15),
  array("ime" => "Adis Hodzic", "duzina" => 8),
  array("ime" => "Marko Markovic", "duzina" => 11),
  array("ime" => "Belma Sarajlic", "duzina" => 22),
  array("ime" => "Ivana Baltic", "duzina" => 30),
  array("ime" => "Damir Demirovic", "duzina" => 3)
);

foreach ($klijentiArr as $klijent) {
  $cijena = izracunajCijenu($klijent["duzina"]);
  echo "<br>Cijena kose za klijenta " . $klijent["ime"] . " je " . $cijena . " KM";
}

echo "<br>";

$arr = array("Aki" => 3, "Cuni" => 30, "Boby" => 20);

foreach ($arr as $key => $value) {
  echo "<br>Cijena kose za klijenta " . $key . " je " . izracunajCijenu($value) . " KM";
}

echo "<br>";

class Klijent {
  public $ime;
  public $duzina;
}

$klijent1 = new Klijent();
$klijent2 = new Klijent();
$klijent3 = new Klijent();

$klijent1->ime = "John";
$klijent1->duzina = 18;

$klijent2->ime = "Mark";
$klijent2->duzina = 28;

$klijent3->ime = "Boby";
$klijent3->duzina = 33;

$objKlijenti = array($klijent1, $klijent2, $klijent3);

foreach ($objKlijenti as $key => $value) {
  echo "<br>Cijena kose za klijenta " . $value->ime . " je " . izracunajCijenu($value->duzina) . " KM";
}


?>