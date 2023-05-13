<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forma za unos podataka</title>
</head>
<body>
  <h1>Forma za unos podataka</h1>
  <?php 
    function obradiPodatke() {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        echo "<br><p>Dobili smo sljedece podatke: Ime: $ime i Prezime: $prezime</p>";
      }
    }
  ?>
  <!-- <form method="post" action=<?php obradiPodatke(); ?>> -->
   <form method="post" action="./obrada_podataka.php">
    <label for="ime">Ime:</label>
    <input type="text" name="ime" id="ime" placeholder="Unesite ime"><br><br>
    <label for="prezime">Prezime:</label>
    <input type="text" name="prezime" id="prezime" placeholder="Unesite prezime" ><br><br>
    <button type="submit">Posalji</button>
  </form>
</body>
</html>