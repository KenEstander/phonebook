<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $contact_list = contact()->list();
  ?>
  <h2>Add a New Contact</h2>
<form action="process.php?action=add-contact" method="post" style="width:30%">
  NAME
  <input type="text" name="name" class="form-control">
  NUMBER
  <input type="text" name="number" class="form-control">
  AGE
  <input type="text" name="age" class="form-control">
  <br>
  <button type="submit" name="button" class="btn btn-primary" style="width:50%">Submit</button>
  <br> <br>  <button onclick="history.back()" type="button" name="button" class="btn btn-secondary">Back</button>
</form>
