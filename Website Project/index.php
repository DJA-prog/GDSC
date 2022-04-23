<?php require 'header.php'; ?>

<main>
  <div class="newDir">
    <?php
      if(isset($_GET["f"])){
        if($_GET["f"] == "newDir"){
          echo '<form class="" action="./common/formhandler.php" method="post">
            <select class="" name="dir">';
              if ($handle = opendir("./data")) {
                $files = array();
                while ($files[] = readdir($handle));
                closedir($handle);
                sort($files);
                foreach ($files as $value) {
                  if ($value != ".." && $value != "") {
                    $ext = pathinfo($value, PATHINFO_EXTENSION);
                    if ($ext == "") {
                      if ($value == ".") {
                        echo '<option value=".">Data</option>';
                      }else{
                        echo '<option value="'.$value.'">'.$value.'</option>';
                      }
                    }
                  }
                }
              }
          echo '
          </select>
          <input type="text" name="newDirName" placeholder="Directory" required>
          <button type="submit" name="newDir">Create</button>
        </form>';
        }
      }
     ?>
  </div>
  <div class="contents">
    <?php
    if (isset($_GET["d"])) {
      $content = $_GET["d"];
    }else{
      $content = "./data";
    }
    if ($handle = opendir($content)) {
      $files = array();
      while ($files[] = readdir($handle));
      closedir($handle);
      sort($files);
      foreach ($files as $value) {
        if ($value != "." && $value != "") {
          $ext = pathinfo($value, PATHINFO_EXTENSION);
          if ($ext == "") {
            echo
            '<a href="./index.php?d='.$content.'/'.$value.'" class="dirBox">
              <img src="./img/icons/directory.png" alt="">
              <h3>'.$value.'</h3>
            </a>';
          }else{
            echo
            '<a href="./index.php?d='.$content.'/'.$value.'" class="fileBox">
              <img src="./img/icons/data.png" alt="">
              <h3>'.$value.'</h3>
            </a>';

          }
        }
      }
    }
    ?>
  </div>
</main>


  </body>
</html>
