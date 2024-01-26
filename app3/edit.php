<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $Id = $_GET["Id"];
$contact = contact()->get("Id=$Id");

?>

<form action="process.php?action=edit-contact&Id=<?=$contact->Id?>" method="post" style="width:50%">
  Name
  <input type="text" name="name" class="form-control" value="<?=$contact->name?>">
  Number
  <input type="text" name="number" class="form-control"  value="<?=$contact->number?>">
  Age
  <input type="text" name="age" class="form-control"  value="<?=$contact->age?>">
  <br>
  <button class="btn btn-primary" type="Submit" name="button">Edit</button>
</form>
