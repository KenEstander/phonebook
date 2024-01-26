<?php

$ROOT_DIR="../";
include $ROOT_DIR . "templates/header.php";

 ?>


<form action="process.php?action=add-contact" method="post" style="width:50%">
  name
  <input type="text" name="name" class="form-control">
  number
  <input type="text" name="number" class="form-control">
  age
  <input type="text" name="age" class="form-control">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
