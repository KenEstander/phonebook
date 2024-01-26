<?php
$ROOT_DIR="../";
include $ROOT_DIR . "templates/header.php";
$contact_list = contact()->list();
?>

<a href="add.php" class="btn btn-primary" type="button" name="button" >ADD</a>

<table class="table">
  <tr>
    <td>#</td>
    <td>Name</td>
    <td>Number</td>
    <td>Age</td>
  </tr>

<?php foreach ($contact_list as $row): ?>
  <tr>
    <td><?=$row->Id?></td>
    <td><?=$row->name?></td>
    <td><?=$row->number?></td>
    <td><?=$row->age?></td>
    <td><a href="edit.php" class="btn btn-secondary" type="button" name="button">Edit</a></td>
    <td><a href="delete.php" class="btn btn-danger" type="button" name="button">Delete</button></td>
  </tr>
<?php endforeach; ?>

</table>





<?php include $ROOT_DIR . "templates/footer.php"; ?>
