<?php
  /*
  In this challenge, you will determine whether a string is funny or not. To determine whether a string is funny, create a copy of the string in reverse e.g. . Iterating through each string, compare the absolute difference in the ascii values of the characters at positions 0 and 1, 1 and 2 and so on to the end. If the list of absolute differences is the same for both strings, they are funny.
  Determine whether a give string is funny. If it is, return Funny, otherwise return Not Funny.
 * Complete the 'funnyString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */
echo "<br>";

function funnyString($s) {
    // Write your code here
    $stringArray = str_split($s);
    $ascendingArr = array();
    $descendingArr = array();
    foreach ($stringArray as $key => $value) {
      $asciiNumber = ord($value);
      array_push($ascendingArr, $asciiNumber);
      array_push($descendingArr, $asciiNumber);
    }
    $descendingArr = array_reverse($descendingArr);
    foreach ($ascendingArr as $key => $value) {
      echo $value . ", ";
    }
    echo "<br>";
    foreach ($descendingArr as $key => $value) {
      echo $value . ", ";
    }
    $funnyString = "Funny";
    for ($i=0; $i < count($ascendingArr) - 1; $i++) { 
      $diff1 = abs($ascendingArr[$i + 1] - $ascendingArr[$i]);
      $diff2 = abs($descendingArr[$i] - $descendingArr[$i + 1]);
        echo "<br> " . $diff1 . " compare " . $diff2;
      if ($diff1 != $diff2) {
        $funnyString = "Not Funny";
      }
    }
    echo "<br> " . $funnyString;
    return $funnyString;
}
  
funnyString("acxz");
echo "<br>";
funnyString("bcxz");
?>