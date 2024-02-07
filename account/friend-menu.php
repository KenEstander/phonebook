<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $friendId = $_GET["friendId"];
  $menu_list = menu()->list("userId=$friendId");
  ?>
  <h1>My Friend's Menu</h1>



<div class="row">

<?php
$count = 0;
foreach ($menu_list as $row):
  $count += 1;
   ?>

   <div class="col-3">

<a href="view-ingredients.php?Id=<?=$row->Id?>">


         <img src="../media/<?=$row->image?>" style="width:253px; height:220px;">


     <div class="card card-footer; btn btn-primary">
        <?=$row->name?>
     </div>

   </div>


<?php endforeach; ?>


</div>

<br>
<br>





  <a href="my-friend.php" class="btn btn-warning">BACK</a>









  <?php include $ROOT_DIR . "templates/footer.php"; ?>
