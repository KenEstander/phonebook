<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $Id = $_GET["Id"];
  $contact = contact()->get("Id=$Id");
  ?>

<form action="process.php?action=edit-contact&Id=<?=$contact->Id?>" method="post" style="width:30%">
  <h5>Name</h5>
  <input type="text" name="name" class="form-control" value="<?=$contact->name?>">
  <h5>Number</h5>
  <input type="text" name="number" class="form-control" value="<?=$contact->number?>">
  <h5>Age</h5>
  <input type="text" name="age" class="form-control" value="<?=$contact->age?>">
  <h5>Birthday</h5>
  <input type="text" name="birthday" class="form-control" value="<?=$contact->birthday?>">
  <br>
  <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>
