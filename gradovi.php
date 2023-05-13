<!DOCTYPE html>
<html>
<head>
  <title>Lista Gradova</title>
</head>
<body>
  <h1>Lista Gradova</h1>
  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
    <label for="gradovi">Unesite gradove (odvojene zarezom):</label><br>
    <input type="text" name="gradovi" id="gradovi"><br><br>
    <input type="submit" name="submit" value="Posalji">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $gradovi = $_POST["gradovi"];
      $gradovi = str_replace(' ', '', $gradovi);
      $gradovi_niz = explode(",", $gradovi);
      echo "<br> Gradovi koje ste unijeli su: </br>";
      foreach ($gradovi_niz as $grad) {
        echo $grad . "<br>";
      }
    }
  ?>
</body>
</html>