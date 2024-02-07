<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $Id = $_GET["Id"];
  $menu = menu()->get("Id=$Id");
  $ingredients_list = recipe()->list("menuId=$menu->Id");
  $comment_list = comment()->list("menuId=$menu->Id");

?>
<h2><?=$menu->name?></h2>

<form action="process.php?action=add-recipe&Id=<?=$menu->Id?>" method="post" style="width:20%">

  <input type="text" name="name" class="form-control" placeholder="Enter Ingredients" style="text-align:center;" required>
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
  <td><a href="process.php?action=delete-recipe&Id=<?=$row->Id?>&menuId=<?=$menu->Id?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php endforeach; ?>

</table>



<h1>COMMENTS</h1>
<table class="table" style="width:50%; text-align: center;">
  <?php foreach ($comment_list as $row):
    $contact = contact()->get("Id = $row->userId")



    ?>
  <tr>

     <td> <?=$row->content?></td>
     <td> <?=$contact->name?></td>
  </tr>

    <?php endforeach; ?>

</table>
COMMENTS:
<br>
<form action="process.php?action=user-reply&menuId=<?=$menu->Id?>" method="post">

  <textarea cols="35" rows="2" class="form-inline" type="text" name="comments" required>
  </textarea>
  <button type="submit" class="btn btn-secondary">Comment</button>
</form>
<a href="my-menu.php" class="btn btn-primary">Back</a>
