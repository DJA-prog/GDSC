<?php

$upload_count = count($_FILES["uploads"]["name"]); // count the number of files uploaded
echo $upload_count;
print_r($_FILES);

for ($i=0; $i < $upload_count; $i++) { // loop the number of times there are files
  $fileName = $_FILES["uploads"]["name"][$i]; // get name of files one by one
  $fileTmpName = $_FILES["uploads"]["tmp_name"][$i]; // get temp name of files one by one
  $fileError = $_FILES["uploads"]["error"][$i]; // get error status of files one by one

  if ($fileError === 0) { // check if file had an error uploading
    $fileDestination = "./uploads/".$fileName; // upload file name
    if (move_uploaded_file($fileTmpName, $fileDestination)) { // move file form tmp storage to final destinaton
      echo "Upload Success<br>";
    }else{
      echo "Upload failed on server side<br>";
    }
  }
}
header("Location: ./index.php?upload done");
exit;


 ?>
