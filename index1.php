<html>
  <head>
    <title>Moja web stranica</title>
  </head>
  <body>
    <?php
      $name = "Marko";
      $age = 30;
      $price = 9.99;
      echo $name . "</br>" . $age;
      $niz = array(8, 9, 10);
      $gradoviUsk = array("Bihac", "B. Krupa", "Cazin", "V. Kladusa", "S. Most", "B. Petrovac", "Kljuc");
      $sports = array("ice" => "hokey", "log" => "mog");
      echo $gradoviUsk[3] . "</br>" . $niz[0] . "</br>";
      foreach ($gradoviUsk as $key => $value) {
        echo "index: " . $key . " - " . $value . "</br>";
      }
      echo $sports["ice"] . "</br>";
      foreach ($sports as $key => $value) {
        echo $key . " - " . $value . "</br>";
      }
      echo $age * $price . "</br>";
      echo $sports["log"] . "</br>";

      class OsobaOld {
        public $ime;
        public $prezime;
        public $total;

        function ispisImena() {
          echo $this->ime . ' ' . $this->prezime . "</br>";
        }

        function calculate() {
          echo $this->total * 10 . "</br>";
        }
      }

      $osoba = new OsobaOld();
      $osoba->ime = "Marko";
      $osoba->prezime = "Kovacevic";
      $osoba->total = 88;
      $osoba->ispisImena();
      $osoba->calculate();

      $prvi = 5;
      $drugi = 10;
      $treci = 15;

      $prosjek = ($prvi + $drugi + $treci) / 3;
      echo "Prosjecna vrijednost tri broja je: " . $prosjek . "</br>";

      class CalcAvg {
        public $num1;
        public $num2;
        public $num3;
        public $zbir;
        public $avg;

        function calculateAvg() {
          $this->zbir = $this->num1 + $this->num2 + $this->num3;
          $this->avg = $this->zbir / 3;
          echo "Average is: " . $this->avg . "</br>";
        }
      }

      $calc = new CalcAvg();
      $calc->num1 = 3;
      $calc->num2 = 6;
      $calc->num3 = 9;
      $calc->calculateAvg();

      class Prosjek {
        public $br1;
        public $br2;
        public $br3;

        function izracunProsjeka() {
          echo "Prosjecna vrijednost je: " . ($this->br1 + $this->br2 + $this->br3) / 3 . "</br>";
        }
      }

      $prosjek2 = new Prosjek();
      $prosjek2->br1 = 6;
      $prosjek2->br2 = 12;
      $prosjek2->br3 = 24;
      $prosjek2->izracunProsjeka();

      $number = 9;

      function calcTotal() {
        echo "Total " . 3;
      }
      calcTotal();
    ?>
  </body>
</html>