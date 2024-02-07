<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";


  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $contact_list = contact()->list();
  $checkFriend = friend()->count("myId=$contact->Id");

  ?>
<h1>Hi <?=$contact->name?></h1>, <br>

<a href="my-friend.php" class="btn btn-warning">My Friends (<?=$checkFriend?>)</a>
<a href="my-menu.php" class="btn btn-info">My Menu</a>
<a href="login.php" class="btn btn-danger">Log out</a>
<a href="add-friend.php" class="btn btn-primary">Add Friends</a>




<?php include $ROOT_DIR . "templates/footer.php"; ?>
