<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <!-- The enctype attribute specifies how the form-data should be encoded when submitting it to the server. -->
      <!-- "multipart/form-data"	 This value is necessary if the user will upload a file through the form -->
      <input type="file" name="upload_file" required> <!-- single file upload -->
      <!-- <input type="file" name="upload_file[]" required multiple> multiple file upload -->
      <input type="submit" name="sumbit" value="Upload">
    </form>
  </body>
</html>
