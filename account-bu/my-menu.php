<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $menu_list = menu()->list("userId=$contact->Id");

  ?>
  <h1> My Menu </h1>

<form style="text-align:center; margin-left:300px;width:50%;" action="process.php?action=add-menu&Id=<?=$contact->Id?>&userId=<?$menu_list->Id?>" method="post" enctype="multipart/form-data" class="form-inline">
  <input type="file" name="image"style="width:20%"  required>
  <input type="text" name="name" class="form-control" placeholder="New Menu" required>
  <button type="submit" name="button" class="btn btn-primary">Add</button>
</form>
<table class="table" style="width:35%">

<?php foreach ($menu_list as $row):
   ?>
  <tr>
      <td> <img src="../media/<?=$row->image?>" alt="umorice" style="width:50px; height:50px;"> </td>
      <td><?=$row->name?></td>

      <td></td>
      <td></td>
      <td> <a href="view-ingredients.php?Id=<?=$row->Id?>" class="btn btn-info">View</a>
      <a href="process.php?action=delete-ingredients&Id=<?=$row->Id?>&userId=<?=$row->Id?>" class="btn btn-danger">Delete</a> </td>
  </tr>

<?php endforeach; ?>
</table>


  <a href="home.php" class="btn btn-warning">BACK</a>
  <?php include $ROOT_DIR . "templates/footer.php"; ?>
