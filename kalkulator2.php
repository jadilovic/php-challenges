<!DOCTYPE html>
<html>
<head>
  <title>Jednostavni kalkulator</title>
</head>
<body>
  <h1>Jednostavni kalkulator</h1>
  <form method="post">
    <label for="broj1">Broj 1:</label>
    <input type="number" name="broj1" id="broj2" /><br><br>
    <label for="broj2">Broj 2:</label>
    <input type="number" name="broj2" id="broj2"><br><br>
    <label for="operacija">Operacija:</label><br>
    <input type="radio" name="operacija" id="sabiranje" value="sabiranje">
    <label for="sabiranje">Sabiranje</label><br>
    <input type="radio" name="operacija" id="oduzimanje" value="oduzimanje">
    <label for="oduzimanje">Oduzimanje</label><br>
    <input type="radio" name="operacija" id="mnozenje" value="mnozenje">
    <label for="sabiranje">Mnozenje</label><br>
    <input type="radio" name="operacija" id="dijeljenje" value="dijeljenje">
    <label for="dijeljenje">Dijeljenje</label><br><br>
    <input type="submit" value="Izracunaj">
  </form>
  <?php
    function izracunajRezultat($broj1, $broj2, $operacija) {
      switch ($operacija) {
        case 'sabiranje':
          return $broj1 + $broj2;
          break;
        case 'oduzimanje':
          return $broj1 - $broj2;
          break;
        case 'mnozenje':
          return $broj1 * $broj2;
          break;
        case 'dijeljenje':
          return $broj1 / $broj2;
          break;
        default:
          return "Nepoznata operacija";
          break;
      }
    }

    $arrKey = $_POST["broj1"];

    if ($arrKey) {
      $broj1 = $_POST["broj1"];
      $broj2 = $_POST["broj2"];
      $operacija = $_POST["operacija"];
      $rezultat = izracunajRezultat($broj1, $broj2, $operacija);
      ispisRezultata($rezultat, $operacija);
    }
  ?>

  <div style="margin-top: 20px;" >
  <?php 
    function ispisRezultata($rezultat, $operacija) {
      echo "<h1>Rezultat operacije - $operacija</h1>";
      echo "<h2>$rezultat</h2>";
    }
  ?>

</div>
</body>
</html>