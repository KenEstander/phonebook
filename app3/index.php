<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
$contact_list = contact()->list();
?>
<a href="add.php" class="btn btn-primary">ADD</a>

<table class="table" style="width:50%">

  <tr>
    <td>#</td>
    <td>name</td>
    <td>number</td>
    <td>age</td>
  </tr>

<?php
$count = 0;

 foreach ($contact_list as $row):

$count += 1;
   ?>

  <tr>
    <td><?=$count?></td>
    <td><?=$row->name?></td>
    <td><?=$row->number?></td>
    <td><?=$row->age?></td>
    <td>
    <a href="edit.php?Id=<?=$row->Id?>" class="btn btn-secondary">Edit</a>
  </td>
  <td>
    <a href="process.php?action=delete-contact&Id=<?=$row->Id?>" class="btn btn-danger">Danger</a>
  </td>
  </tr>
<?php endforeach; ?>



</table>
