<?php

$ROOT_DIR="../";
include $ROOT_DIR . "templates/header.php";

$Id = $_GET["Id"];

$contact = contact()->get("Id=$Id");

 ?>


<form action="process.php?action=edit-contact&Id=<?=$Id?>" method="post" style="width:50%">
  name
  <input type="text" name="name" class="form-control" value="<?=$contact->name?>">
  number
  <input type="text" name="number" class="form-control"  value="<?=$contact->number?>">
  age
  <input type="text" name="age" class="form-control"  value="<?=$contact->age?>">

  <button type="submit" class="btn btn-primary">Edit</button>
</form>
