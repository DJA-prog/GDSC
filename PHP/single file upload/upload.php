<?php

$file = $_FILES["upload_file"];
$fileName = $_FILES["upload_file"]["name"];
$fileTmpName = $_FILES["upload_file"]["tmp_name"];
$fileError = $_FILES["upload_file"]["error"];

if ($fileError === 0) {
  $fileDestination = "./uploads/".$fileName;
  if (move_uploaded_file($fileTmpName, $fileDestination)) {
    header("Location: ./index.php?upload=success");
    exit;
  }else{
    echo "Upload failed on server side";
  }
}else{
  echo "Upload error during transfer";
}
header("Location: ./index.php");
exit;

 ?>
