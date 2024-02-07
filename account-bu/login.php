<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  ?>

<form action="process.php?action=log-in" method="post" style="width:30%">
  <h5>Username</h5>
  <input type="text" name="name" class="form-control">
  <h5>Password</h5>
  <input type="password" name="password" class="form-control">
  <br>

  <button type="submit" name="button" class="btn btn-primary">Login</button>
</form>
<?php include $ROOT_DIR . "templates/footer.php"; ?>
