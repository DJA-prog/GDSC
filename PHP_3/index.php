<?php
  $_POST = array('value1' => 3 , 'value2' => 2, 'opperation' => "sub", "submit" => "Equal");
  print_r($_POST);echo "<br>";
  echo $_POST['value1'];
  echo "<hr>";

  $_FILES = array('upload_file' => array('name' => "index.png", 'tmp_name' => "/tmp/php45tf"));
  print_r($_FILES); echo "<br>";
  echo $_FILES['upload_file']['tmp_name'];
 ?>
