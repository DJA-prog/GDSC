<?php require 'header.php'; ?>

<main class="forms">
  <h2>Forms</h2>
  <div class="row">
    <div class="form">
      <form class="" action="form_handler.php" method="post" enctype="multipart/form-data">
        <input type="text" name="newfilename" placeholder="Filename" required>
        <input type="file" name="upload_file" accept="image/jpeg" required>
        <input type="submit" name="submit_1" value="Upload">
      </form>
    </div>

    <div class="form">
      <form class="" action="form_handler.php" method="post">
        <input type="text" name="" placeholder="Name">
        <input type="email" name="" placeholder="email" required>
        <textarea name="name" rows="8" cols="80" required></textarea>
        <input type="submit" name="submit_2" value="Send Comment">
      </form>
    </div>
  </div>
</main>

<?php require 'footer.php'; ?>
