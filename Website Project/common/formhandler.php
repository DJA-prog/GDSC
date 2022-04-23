<?php

if (isset($_POST["upload"])) {
  $total = count($_FILES["file"]['name']);
  $dirPath = "../data/".$_POST["dir"];

  for ($i=0; $i < $total; $i++) {
    $tmpFilePath = $_FILES['file']['tmp_name'][$i];
	  $fileName = $_FILES['file']['name'][$i];
	  $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFilePath = $dirPath."/".$fileName;
    if(!file_exists($newFilePath)){
      echo "File Exists";
      exit;
    }
    move_uploaded_file($tmpFilePath, $newFilePath);
  }
  header("Location: ../index.php?upload=success");
  exit;
}

if (isset($_POST["newDir"])) {
  $dir = "../data/".$_POST["dir"]."/".$_POST["newDirName"];
  // if(!file_exists($dir)){
  //   header("Location: ../index.php?newDir=exists");
  //   exit;
  // }
  mkdir($dir, 0777);
  header("Location: ../index.php?newDir=success");
  exit;
}





 ?>
