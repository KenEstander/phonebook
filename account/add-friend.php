<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $keyword = get_query_string("keyword", "");
  $contact_list = contact()->list("(name like '%$keyword%' or number like '%$keyword%') and Id!=$contact->Id")
  ?>

  <h1>MY FRIEND</h1>


<table class="table">
<?php
$count = 0;
foreach ($contact_list as $row):
  $count += 1;
$checkFriend = friend()->count("myId=$contact->Id and friendId=$row->Id");
//Birthday to Age According to the Data now
$birthDate = explode("-", $row->birthday);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
  ? ((date("Y") - $birthDate[0]) - 1)
  : (date("Y") - $birthDate[0]));
//Gender
$genderReal = $row->gender;
if ($genderReal=="Male") {
 $finalName = "Mr. ". $row->name;
}
if ($genderReal=="Female") {
 $finalName = "Ms. ".$row->name;
}
?>
<?php if ($keyword != $contact_list): ?>

<?php endif; ?>
<?php if ($keyword!=""): ?>

  <tr>
    <td><?=$count?></td>
    <td><?=$finalName?></td>
    <td><?=$row->number?></td>
    <td><?=$age?></td>
    <td><?=$row->birthday?></td>
    <?php if ($checkFriend==0): ?>
      <td><a href="process.php?action=add-friend&Id=<?=$row->Id?>" class="btn btn-primary">Add Friend</a>
      </td>
    <?php endif; ?>
    <?php if ($checkFriend==1): ?>
      <td><a href="" class="btn btn-secondary">Friends</a>
      </td>
    <?php endif; ?>
  <?php endif; ?>

<?php endforeach; ?>
</table>

<a href="home.php" class="btn btn-warning">BACK</a>









<?php include $ROOT_DIR . "templates/footer.php"; ?>
