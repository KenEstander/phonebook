<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $contact_list = contact()->list();
  ?>

<table class="table" style="width:45%;">
  <h1>PHONEBOOK</h1>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Number</th>
    <th>Age</th>
    <th>Birthday</th>
    <th> <input type="text" class="form-control" id="input-search" placeholder="Search Contact" /></th>
  </tr>


<?php
$count = 0;
foreach ($contact_list as $row):
  $count += 1;

//Birthday to Age According to the Data now
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
    <td><?=$finalName?></td>
    <td><?=$row->number?></td>
    <td><?=$age?></td>
    <td><?=$row->birthday?></td>
    <td><a href="process.php?action=add-friend&Id=<?=$row->Id?>" class="btn btn-primary">Add Friend</a>
    </td>
    </tr>
<?php endforeach; ?>
</table>

<a href="home.php" class="btn btn-warning">BACK</a>
<?php include $ROOT_DIR . "templates/footer.php"; ?>
