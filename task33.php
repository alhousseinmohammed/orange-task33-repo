<?php
// 1
$colors = ["red", "green", "white"];
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo "<br>";

// 2
$colors = array('white', 'green', 'red');
echo "<ul>";
for ($i = 0; $i < sizeof($colors); $i++) {
  echo "<li>" . $colors[$i] . "</li>";
}
echo "</ul>";
echo "<br>";

// 3

// 4
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo $color[4];
echo "<br>";

// 5
$numbers = [1, 2, 3, 4, 5];
function ($array, $item, $position) {
  $newArray = []
  for ()
}


// 6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// 7
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 75, 76, 65, 64, 73, 75, 79, 73);
for ($i = 0; $i < sizeof($temps); $i++) {
}

// 8

// 9
$colors =   array("red",  "blue", "white", "yellow");
for ($i = 0; $i < sizeof($colors); $i++) {
  $colors[$i] = strtoupper($colors[$i]);
}

// 10
$colors =   array("RED",  "BLUE", "WHITE", "YELLOW");
for ($i = 0; $i < sizeof($colors); $i++) {
  $colors[$i] = strtolower($colors[$i]);
}
echo 

// 11
echo "<br>" . 11 . "<br>";
echo implode(", ", range(200, 250, 4));
// 12
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
for ($i = 0; $i < sizeof($words); $i++) {
  for ($o = $i; $o < sizeof($words); $o++) {
  }
}
echo "<br>";

// 13
$start = 11;
$end = 20;
$numbers = [];
for ($i = $start; $i < $end; $i++) {
  array_push($numbers, $i);
}
shuffle($numbers);
echo implode(", ", $numbers);
echo "<br>";

// 13 again
$numbers = range($start, $end - 1);
shuffle($numbers);
echo implode(", ", $numbers);

// 14

// 15

// 16
// function floor($number, $percision, $separator)
// {
// }

// 17
$list1 = [4, 5, 6, 7];
$lisit2 = [4, 5, 6, 7, 8];

// 18
$array = [4, 5, 6, 7, 4, 7, 8];
$newArray  = []
for ($i = 0; $i < sizeof($array); $i++) {
  if 
}
// 19
echo "<br><br>";
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];
for ($i = 0; $i < sizeof($array1); $i++) {
  for ($o = 0; $o < sizeof($array2); $o++) {
    if ($array2[$o] == $array1[$i + $o]) {
    }
  }
}
