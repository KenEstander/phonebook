<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $Id = $_GET["Id"];
  $menu = menu()->get("Id=$Id");
  $ingredients_list = recipe()->list("menuId=$menu->Id");
?>
<h2><?=$menu->name?></h2>

<form action="process.php?action=add-recipe&Id=<?=$menu->Id?>" method="post" style="width:20%">

  <input type="text" name="name" class="form-control" placeholder="Enter Ingredients" style="text-align:center;">
  <br>
  <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>

<table class="table" style="width:20%">
  <tr>
<th>INGREDIENTS</th>
</tr>
<?php foreach ($ingredients_list as $row): ?>
<tr>
  <td><?=$row->ingredients?></td>
  <td><a href="process.php?action=delete-ingredients&Id=<?=$row->Id?>&menuId=<?=$menu->Id?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php endforeach; ?>

</table>
<a href="index.php" class="btn btn-primary">Back</a>
