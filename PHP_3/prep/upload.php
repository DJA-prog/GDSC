<?php
/*
SUper globals
$_POST
$_GET
$_FILES
*/


if (isset($_POST["sumbit"])) { //check if submit button was pressed
  $file = $_FILES["upload_file"];
  // print_r($_FILES); // print the array called $file
  // exit;
  $fileName = $_FILES["upload_file"]["name"];
  $fileTmpName = $_FILES["upload_file"]["tmp_name"];
  $fileSize = $_FILES["upload_file"]["size"];
  $fileError = $_FILES["upload_file"]["error"];
  $fileType = $_FILES["upload_file"]["type"];

  $fileExt = pathinfo($fileName, PATHINFO_EXTENSION); // returns the file extention
  $fileExt = strtolower($fileExt); // make extention lowercase due to some may be uppercase
  echo $fileExt;
  $allowedFormats = array("jpg", "jpeg", "png", "pdf"); // a list of file types allowed to be uploaded

  if (in_array($fileExt, $allowedFormats)) { // check if uploaded file is allowed
    if ($fileError === 0) { // === is the same as == but will check if it is related
      if ($fileSize < 2000000) { // allow for only file smaller than 1 000 000 B
        // $fileNameNew = uniqid('', true).'.'.$fileExt; // get time format in microseconds used for new upload name, create a new file name
        $fileDestination = "./uploads/".$fileName;
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
          header("Location: ./index.php?upload=success");
          exit;
        }else{
          echo "Upload failed on server side";
        }
      }else{
        echo "File size limit exceeded";
      }
    }else{
      echo "Upload error during transfer";
    }
  }else{
    echo "Format not permitted";
  }

}else{
  header("Location: ./index.php?no-submit"); //return to the previous page
  exit; // end script here to prevent script from running on if not needed to
}


 ?>
