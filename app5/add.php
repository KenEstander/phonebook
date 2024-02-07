<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $contact_list = contact()->list();
  ?>

<form action="process.php?action=add-contact" method="post" style="width:30%">
  <h5>Name</h5>
  <input type="text" name="name" class="form-control">
  <h5>Number</h5>
  <input type="text" name="number" class="form-control">
  <h5>Birthday</h5>
  <input type="date" name="birthday" class="form-control">
  <br>
  <h5>Gender</h5>
  <select class="form-control" name="gender">
    <option>Male</option>
    <option>Female</option>
  </select>

  <h5>Password</h5>
  <input type="password" name="password" class="form-control">
  <br>

  <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>
