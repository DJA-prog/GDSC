<?php require 'header.php'; ?>

<main>
  <div class="centering">
    <form class="upload_form" action="./common/formhandler.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td><label for="">Directory:</label></td>
          <td>
            <select class="" name="dir">
              <?php
              if ($handle = opendir("./data")) {
                $files = array();
                while ($files[] = readdir($handle));
                closedir($handle);
                sort($files);
                foreach ($files as $value) {
                  if ($value != "." && $value != ".." && $value != "") {
                    $ext = pathinfo($value, PATHINFO_EXTENSION);
                    if ($ext == "") {
                      echo '<option value="'.$value.'">'.$value.'</option>';
                    }
                  }
                }
              }
               ?>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="">File:</label></td>
          <td><input type="file" name="file[]" multiple required></td>
        </tr>
      </table>
      <button type="submit" name="upload">Upload</button>
    </form>
  </div>
</main>




</body>
</html>
