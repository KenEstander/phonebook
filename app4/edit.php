<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";

  $Id = $_GET["Id"];

  $contact = contact()->get("Id=$Id");
  ?>

  <h2>Edit A Contact</h2>
  <form action="process.php?action=edit-contact&Id=<?=$contact->Id?>" method="post" style="width:30%">
  NAME
  <input type="text" name="name" class="form-control" style="text-align:center" value="<?=$contact->name?>">
  NUMBER
  <input type="text" name="number" class="form-control" style="text-align:center" value="<?=$contact->number?>">
  AGE
  <input type="text" name="age" class="form-control" style="text-align:center" value="<?=$contact->age?>">
  <br>
  <button type="submit" name="button" class="btn btn-primary" style="width:50%">Submit</button>
  <br><br>
  <button onclick="history.back()" type="button" name="button" class="btn btn-secondary">Back</button>
  </br>
  </form>
