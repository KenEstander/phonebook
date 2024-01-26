<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
$contact_list = contact()->list();
?>

<form action="process.php?action=add-contact" method="post" style="width:50%">
  Name
  <input type="text" name="name" class="form-control">
  Number
  <input type="text" name="number" class="form-control">
  Age
  <input type="text" name="age" class="form-control">
  <br>
  <button class="btn btn-primary" type="Submit" name="button">Submit</button>
</form>
