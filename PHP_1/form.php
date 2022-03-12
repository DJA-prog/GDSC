<?php
  //get values
  $value1 = $_GET["value1"]; //6
  $value2 = $_GET["value2"]; //3
  $value3 = $_GET["opperation"]; // "div"
  // $_GET = {"value1":"6"; "value2":"3"; "opperation":"div"; "submit":"Equal"};
  // opperations
  if ($value3 == "add"){
    $answer = $value1+$value2;
  }
  if ($value3 == "sub"){
    $answer = $value1-$value2;
  }
  if ($value3 == "mul"){
    $answer = $value1*$value2;
  }
  if ($value3 == "div"){
    $answer = $value1/$value2;
  }

  // print
  echo "The answer is ".$answer;

  // ==
  // <
  // >
  // !=
 ?>
