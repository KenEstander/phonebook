<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $loggedInUser = $_SESSION["loggedInUser"];
  $contact = contact()->get("name='$loggedInUser'");

  $Id = $_GET["Id"];
  $menu = menu()->get("Id=$Id");
  $ingredients_list = recipe()->list("menuId=$Id");
  $comment_list = comment()->list("menuId=$Id");

  $checkId = menu()->count("userId=$contact->Id and Id=$Id");
?>
<h2 style="text-align:center;"><?=$menu->name?></h2>
 <img src="../media/<?=$menu->image?>" alt="umorice" style="width:100%">
 <?php if ($checkId): ?>

<form action="process.php?action=add-recipe&Id=<?=$menu->Id?>" class="form-inline mt-5" method="post">

  <input type="text" name="name" class="form-control"  placeholder="Enter Ingredients" required>
  <button type="submit" name="button" class="btn btn-primary">Add</button>
</form>
<?php endif; ?>
<table class="table">
  <tr>
  <th>INGREDIENTS</th>
</tr>
<?php foreach ($ingredients_list as $row): ?>
<tr>
  <td><?=$row->ingredients?></td>
  <?php if ($checkId): ?>

    <td width="100"><a href="process.php?action=delete-recipe&Id=<?=$row->Id?>&menuId=<?=$Id?>" class="btn btn-danger">Delete</a></td>
  <?php endif; ?>


</tr>

<?php endforeach; ?>

</table>



<h1>COMMENTS</h1>


<ul class="list-group">
  <?php foreach ($comment_list as $row):
    $contact = contact()->get("Id = $row->userId")



    ?>
  <li class="list-group-item">


    <div class="row">
      <div class="col-1">

          <img src="../media/<?=$contact->image?>"  class="circle-img">
          <b><?=$contact->name?></b>

      </div>
      <div class="col-9">
            <?=$row->content?>
      </div>
      <div class="col-2">
        <i><?=$row->dateAdded?></i>
      </div>

    </div>

  </li>

      <?php endforeach; ?>

  <li class="list-group-item">
    COMMENTS:
    <form action="process.php?action=user-reply&menuId=<?=$menu->Id?>" method="post">

      <textarea  class="form-control" type="text" name="comments" required>
      </textarea>
      <button type="submit" class="btn btn-secondary mt-2">Comment</button>
      <button onclick="history.back()" class="btn btn-primary mt-2">Go Back</button>
    </form>


  </li>

</ul>






















<?php include $ROOT_DIR . "templates/footer.php"; ?>
