<?php
$file = "./uploads/";
if ($handle = opendir($file)) {
while (false !== ($entry = readdir($handle))) {
  if($entry != "." && $entry != ".." && $entry != "" && $entry != "thumb"){
    echo ' <img src="'.$file.$entry.'" alt="">';
  }
}
closedir($handle);
}
 ?>
