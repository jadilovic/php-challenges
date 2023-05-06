<?php
  // echo "Ispis <br>";
  // $ime = "Marko Markovic";
  // echo strlen($ime) . "<br>";
  // echo "Pozicija na kojem pocinje ime " . strpos($ime, "Markovic") . "<br>";
  // $hello = "Hello World";
  // echo "Pozicija na kojoj pocinje World " . strpos($hello, "l") . "<br>";
  // echo "Sub string je: " . substr($hello, 6, 2) . "<br>";
  // echo "Random number: " . rand(5, 16) . "<br>";
  // echo "<br>" . "Datum: " . date("d.m.Y. H:i:s");
  // echo "<br>" . "Only month: " . date("m");
  // echo "<br>" . "To uppercase: " . strtoupper($hello);
  // echo "<br>" . "To lowercase: " . strtolower("toBE Beld");
  // echo "<br>" . "Smething: " . date("H");
  // $nizBrojeva = array(1, 2, 3, 4, 5, 6, "hello", false);
  // echo "<br>" . "Count number of items in array: " . count($nizBrojeva);
 
  // function pozdrav($ime) {
  //   $pozdravnaPoruka = "Pozdrav, " . $ime . "!";
  //   echo "<br>" . $pozdravnaPoruka;
  //   return $pozdravnaPoruka;
  // }

  // $poruka = pozdrav("Jasmin");

  // pozdrav("Aki");

  // echo "<br>" . $poruka;

  // function getTime() {
  //   echo "<br> Today is: " . date("D, d M Y H:i:s");
  // }

  // getTime();

  // function howAreYou($answer) {
  //   if ($answer == true) {
  //     return "Happy";
  //   } else {
  //     return "Sad";
  //   }
  // }

  // echo "<br> You are: " . howAreYou(true);

  // $gradovi = array("bihac", "bl", "mostar", "krupa", "cazin");

  // function zadnjiGrad($gradoviArgs) {
  //   echo "<br> Zadnji grad je: " . $gradoviArgs[count($gradoviArgs) - 1];
  // }

  // function prviGrad($gradoviArgs) {
  //   echo "<br> Prvi grad je: " . $gradoviArgs[0];
  // }

  // function brojGradova($gradoviArgs) {
  //   echo "<br> Broj gradova je: " . count($gradoviArgs);
  //   echo "<br> Size of array: " . sizeof($gradoviArgs);
  // }

  // function callAll($arr) {
  //   zadnjiGrad($arr);
  //   prviGrad($arr);
  //   brojGradova($arr);
  // }

  // callAll($gradovi);

  // echo "<br> all cities: " . implode(", ", $gradovi);
  // echo "<br> niz je: " . implode(" - ", $gradovi);

  // for ($i=0; $i < 10; $i++) { 
  //   echo "<br> ispis: " . $i;
  // }

  // $a = 0;

  // while ($a < 10) {
  //  echo "while " . $a . "<br>";
  //  $a++;
  // }

  // $b = 0;
  // do {
  //    echo " do while " . $b . "<br>";
  //    $b++;
  // } while ($b < 10);

  // $nizBrojeva = array("bob", 1, 3, 4, 5, "ha");

  // foreach ($nizBrojeva as $key => $value) {
  //   echo "<br>" . $key . " - " . $value;
  // }

  // foreach ($nizBrojeva as $broj) {
  //   echo $broj . "<br>";
  // }

  // class Osoba {
  //   public $ime;
  //   public $prezime;
  // }

  // $osoba = new Osoba();
  // $osoba->ime = "Jasmin";
  // $osoba->prezime = "Adilovic";

  // foreach ($osoba as $key => $value) {
  //   echo $key . ": " . $value . "<br>";
  // }

  //  foreach ($osoba as $key => $value) {
  //   echo "$key: $value <br>";
  // }

  // $asocijativniNiz = array("ime" => "Jasmin", "prezime" => "Adilovic");

  // foreach ($asocijativniNiz as $key => $value) {
  //   echo "$key: $value <br>";
  // }

  $num = 0;

  if ($num < 0) {
    echo "Ovaj broj je negativan <br>";
  } elseif ($num > 0) {
    echo "Ovaj broj je pozitivan <br>";
  } else {
    echo "Ovaj broj je 0<br>";
  }
  
  $age = 30;
  $gender = "male";
  if ($age < 18 && $gender == "male") {
    echo "Ne mozete glasati na ovoj anketi";
  } elseif ($age > 18 && $gender == "male") {
    echo "Mozete glasati na ovoj anketi";
  } elseif ($age < 18 && $gender == "female") {
    echo "Mozete glasati na ovoj anketi";
  } elseif ($age > 18 && $gender == "female") {
    echo "Mozete glasati na ovoj anketi";
  }

  echo "<br>";

  $variable = 2;

  switch ($variable) {
    case 1:
      echo "Nedovoljan";
      break;
     case 2:
      echo "Dovoljan";
      break;
       case 3:
      echo "Dobar";
      break;
       case 4:
      echo "Vrlo dobar";
      break;
       case 5:
      echo "Odlican";
      break;
    default:
      echo "Unos ocijene nije validan";
      break;
  }


?>