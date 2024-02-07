<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";


  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");
  $contact_list = contact()->list();
  ?>
<img src="../media/<?=$contact->image?>" class="circle-img" style="float:left; margin-right:20px;">
  <h2><?=$contact->name?></h2>
<div class="card">
<div class="card-header" style="text-align:center;">
<h3>NEWS FEED</h3>
</div>
<div class="card-body">
<ul>
<li></li>
</ul>
</div>

</div>














<?php include $ROOT_DIR . "templates/footer.php"; ?>
