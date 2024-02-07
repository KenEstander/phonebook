<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";

// String
  $string = "123";

  // Int
  $int = 12;

  // boolean
  $bol = true;

  // Reference to CRUD.php
  class User
  {
    var $Id = 3;
    var $name = "Fred";
    var $address = "Bacolod City";
  }

  // reference to model.php
  function user() {
  	$user = new User;
  	return $user;
  }

  // object
  $user1 = user();
  $user2 = user();
  $user1->name = "John";
  $user2->name = "James";


  function my_age($x){
    return $x*2;
  }

  function my_money($x){
  	return number_format($x, 2, '.', ',');
  }

  $myAge = my_age(20);


  // array

  $sample = array(
    "Id"=>5,
    "Name"=>"Jason",
    "Age"=>"43");





  $sample["address"] = "Bacolod";


  //  list

  $list = [2024, 07, 02];


  $user_list = [$user1, $user2];
  ?>





<?=$string;?>
<br>
<?=$int?>
<br>
<?=$bol?>
<br>
<?=$user1->name?>
<?=$user2->name?>

<br>
<?=my_age(25)?>

<br>
<?=my_money(2345)?>

<br>

<?=$sample["address"]?>

<br>

<?=$list[0]?>

<br><br><br>


<?php foreach ($list as $row): ?>
  <?=$row?> <br>
<?php endforeach; ?>

<br>


user list
<br>

<?php foreach ($user_list as $row): ?>
  <?=$row->Id?>  <?=$row->name?> <br>
<?php endforeach; ?>

<br>



<?=$user_list[1]->name?>





<?php include $ROOT_DIR . "templates/footer.php"; ?>
