<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $contact_list = contact()->list();
  ?>

  <table class="table" style="width:50%;">
    <h1>PHONE BOOK</h1>
    <tr>
      <td>ID</td>
      <td>NAME</td>
      <td>NUMBER</td>
      <td>AGE</td>
      <td> </td>
      <td> </td>
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
      <th> <a href="edit.php?Id=<?=$row->Id?>" class="btn btn-info">Edit</a></th>
      <th><a href="process.php?action=delete-contact&Id=<?=$row->Id?>" class="btn btn-danger">Delete</a></th>
    </tr>
  <?php endforeach; ?>

  </table>
<a href="add.php" class="btn btn-primary" style="width:50%;">ADD</a>
