<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $friend_list = friend()->list("myId=$contact->Id");


  ?>
  <h1>MY FRIENDS</h1>
<table class="table" style="width:30%">

<?php foreach ($friend_list as $row):
    $friend = contact()->get("Id='$row->friendId'");
   ?>
  <tr>
      <td><?=$friend->name?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td> <a href="friend-menu.php?friendId=<?=$friend->Id?>" class="btn btn-info">View</a>
    <a href="process.php?action=un-friend&Id=<?=$row->Id?>&userId=<?=$contact->Id?>" class="btn btn-danger">Unfriend</a> </td>
  </tr>

<?php endforeach; ?>
</table>
  <a href="home.php" class="btn btn-warning">BACK</a>
  <?php include $ROOT_DIR . "templates/footer.php"; ?>
