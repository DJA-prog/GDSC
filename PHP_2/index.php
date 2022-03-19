<?php
$int1 = 5;
$int2 = 7;
$int3 = 7;

while ($int2 >= $int1) {
  echo $int2."<br>"; //"7<br>"
  $int2--;
}

echo "<hr>";

for ($i=11; $i >= 5; $i--) {
  echo $i."<br>";
}

echo "<hr>";

do {
  $int2--;
  echo $int2."<br>";
} while ($int2 > $int3);

$piece = array ("value1" => "6", "value2" => "3", "opperation" => "div", "submit" => "Equal");

foreach ($piece as $key => $value) {
  echo $value."<br>";
}
while ($a <= 10) {
  // code...
}
 ?>
