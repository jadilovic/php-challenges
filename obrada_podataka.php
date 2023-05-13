<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Obrada podataka</title>
</head>
<body>
  <h1>Obrada podataka</h1>
  <?php
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    echo "<br><p>Dobili smo sljedece podatke: Ime: $ime i Prezime: $prezime</p>";
  ?>
</body>
</html>