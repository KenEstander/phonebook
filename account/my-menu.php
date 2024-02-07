<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $menu_list = menu()->list("userId=$contact->Id");

  ?>
  <h1> My Menu </h1>

<form action="process.php?action=add-menu&Id=<?=$contact->Id?>&userId=<?$menu_list->Id?>" method="post" enctype="multipart/form-data" class="form-inline">
  <input type="file" name="image" required>
  <input type="text" name="name" class="form-control" placeholder="New Menu" required>
  <button type="submit" name="button" class="btn btn-primary">Add</button>
</form>
<table class="table">
  <tr>
    <th width="200">Photo</th>
    <th>Name</th>
    <th width="200">Action</th>
  </tr>


<?php foreach ($menu_list as $row):
   ?>
  <tr>
      <td> <img src="../media/<?=$row->image?>" style="width:100px; height:100px;" alt="umorice"> </td>
      <td><?=$row->name?></td>

      <td> <a href="view-ingredients.php?Id=<?=$row->Id?>" class="btn btn-info">View</a>
      <a href="process.php?action=delete-ingredients&Id=<?=$row->Id?>&userId=<?=$contact->Id?>" class="btn btn-danger">Delete</a> </td>
  </tr>

<?php endforeach; ?>
</table>


  <a href="home.php" class="btn btn-warning">BACK</a>


















  <?php include $ROOT_DIR . "templates/footer.php"; ?>
