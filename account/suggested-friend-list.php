<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $contact_list = contact()->list("Id!=$contact->Id");

  ?>

<table class="table">
  <h1>Suggested Friends</h1>
  <tr>
    <th>ID</th>
    <th></th>
    <th>Name</th>
    <th>Number</th>
    <th>Age</th>
    <th>Birthday</th>

  </tr>


<?php
$count = 0;
foreach ($contact_list as $row):
  $count += 1;
$checkFriend = friend()->count("myId=$contact->Id and friendId=$row->Id");
//Birthday to Age
$birthDate = explode("-", $row->birthday);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
  ? ((date("Y") - $birthDate[0]) - 1)
  : (date("Y") - $birthDate[0]));

//Gender
$genderReal = $row->gender;
if ($genderReal == "Male") {
 $finalName = "Mr. ". $row->name;
}
if ($genderReal == "Female") {
 $finalName = "Ms. ".$row->name;
}
?>


  <tr>

    <td><?=$count?></td>
    <td><img src="../media/<?=$row->image?>" style="width:40px; height:40px; border-radius:50%;"></td>
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
    </tr>
<?php endforeach; ?>
</table>









<?php include $ROOT_DIR . "templates/footer.php"; ?>
