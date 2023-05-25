<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Content of the GET array</title>
</head>
<body>
  <h1>Content of the GET array</h1>
  <?php $oldguess = isset($_POST["guess"]) ? $_POST["guess"] : '' ?>
  <form method="get">
    <label for="guess">Enter something: </label>
    <input type="text" name="guess" id="guess" value="<?= $oldguess ?>" />
    <input type="submit">
    <input type="radio" name="gender" value="male" checked >
    <input type="radio" name="gender" value="female">
    <input type="checkbox" name="class1" value="Math">
    <input type="checkbox" name="class2" value="Bos" checked >
    <br>
    <select name="soda">
      <option value="0">Please select</option>
      <option value="1">Coke</option>
      <option value="2">Pepsi</option>
      <option value="3" selected >Fanta</option>
    </select>
    <input type="submit" value="Create" name="create">
  </form>
<?php
  $arr = array('test', 'test2');
  print_r($arr[1]);
  echo "one\n";
  echo "two\n";
  echo "<br> Using print r GET: <br>";
  print_r($_GET);
  echo "<br> Using var_dump <br>";
  var_dump($_GET);
  echo "<br>POST Using print r <br>";
  print_r($_POST);
  echo "<br>POST Using var_dump <br>";
  var_dump($_POST);
?>
</body>
</html>