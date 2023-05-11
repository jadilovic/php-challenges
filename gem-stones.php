<?php 
/*
There is a collection of rocks where each rock has various minerals embeded in it. Each type of mineral is designated by a lowercase letter 
in the range . There may be multiple occurrences of a mineral in a rock. A mineral is called a gemstone if it occurs at least once in each 
of the rocks in the collection.

Given a list of minerals embedded in each of the rocks, display the number of types of gemstones in the collection.

Example

The minerals  and  appear in each rock, so there are  gemstones.
 * Complete the 'gemstones' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING_ARRAY arr as parameter.
 */

function gemstones($arr) {

  function isInAll($char, $arr) {
    foreach ($arr as $key => $value) {
      if (!str_contains($value, $char)) {
        return false;
      }
    }
    return true;
  }

  $countList = array();
  foreach ($arr as $key => $value) {
    for ($i=0; $i < strlen($value); $i++) { 
      if (isInAll($value[$i], $arr)) {
        array_push($countList, $value[$i]);
      }
    }
  }

  print_r($countList);

  return count(array_unique($countList));
}

$testArr = array('abcdde', 'baccd', 'eeabg');
echo "<h1>" . gemstones($testArr) . "</h1>";



/*
You are given a string containing characters  and  only. Your task is to change it into a string such that there are no matching adjacent 
characters. To do this, you are allowed to delete zero or more characters in the string.

Your task is to find the minimum number of required deletions.

Example

Remove an  at positions  and  to make  in  deletions.
 * Complete the 'alternatingCharacters' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function alternatingCharacters($s) {
	// Write your code here
  $prevCharacter = null;
  $countDeletions = 0;
  foreach (str_split($s) as $key => $value) {
    if ($prevCharacter) {
      if ($prevCharacter !== $value) {
        $prevCharacter = $value;
      } else {
        $countDeletions++;
      }
    } else {
      $prevCharacter = $value;
    }
  }
  return $countDeletions;
}

echo "<h1> number of required deletions: " . alternatingCharacters('BBBAAA') . "</h1>";
echo "<h1> number of required deletions: " . alternatingCharacters('AAA') . "</h1>";
echo "<h1> number of required deletions: " . alternatingCharacters('BABABA') . "</h1>";
echo "<h1> number of required deletions: " . alternatingCharacters('BBBABA') . "</h1>";


?>