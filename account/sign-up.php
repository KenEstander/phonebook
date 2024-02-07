<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header-blank.php";
  $contact_list = contact()->list();
  ?>

<form action="process.php?action=add-contact" method="post" style="width:30%" enctype="multipart/form-data">
  <h5>Name</h5>
  <input type="text" name="name" class="form-control" required>
  <h5>Number</h5>
  <input type="text" name="number" class="form-control" required>
  <h5>Birthday</h5>
  <input type="date" name="birthday" class="form-control" required>
  <br>
  <h5>Gender</h5>
  <select class="form-control" name="gender" required>
    <option>Male</option>
    <option>Female</option>
  </select>

  <h5>Password</h5>
  <input type="password" name="password" class="form-control" required>
  <br>
    <h5>Profile Picture</h5>
  <input type="file" name="image" required class="form-control" >
  <br>

  <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>
<a href="login.php" class="btn btn-danger">BACK</a>


















<?php include $ROOT_DIR . "templates/footer.php"; ?>
