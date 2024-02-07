<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";
  $friendId = $_GET["friendId"];
  $menuId = $_GET["menuId"];
  $recipe_list = recipe()->list("menuId=$menuId");
  $friendMenu = menu()->get("Id=$menuId");
  $comment_list = comment()->list("menuId=$menuId");
?>

</form>
 <img src="../media/<?=$friendMenu->image?>" alt="umorice" style="width:600px; height:400px; margin-left: 100px; margin-top: 60px;">;
<br>

  <h1><?=$friendMenu->name?></h1>


  <table class="table" style="width:20%; text-align: center;">
    <tr>
  <th>INGREDIENTS</th>
  </tr>
  <?php foreach ($recipe_list as $row): ?>
  <tr>
    <td><?=$row->ingredients?></td>
  </tr>
  <?php endforeach; ?>

  </table>

<div class="card-footer">

  <a href="friend-menu.php?friendId=<?=$friendId?>&<?=$menuId?>" class="btn btn-primary">Back</a>

</div>
COMMENTS:
<table class="table" style="width:50%; text-align: center;">
  <?php foreach ($comment_list as $row):
    $contact = contact()->get("Id = $row->userId")



    ?>
  <tr>

     <td> <?=$row->content?></td>
     <td> <?=$contact->name?></td>
  </tr>

    <?php endforeach; ?>

</table>
<br>
<form action="process.php?action=add-comment&friendId=<?=$friendId?>&menuId=<?=$menuId?>" method="post">

  <textarea cols="35" rows="2" class="form-inline" type="text" name="comments" required>
  </textarea>
  <button type="submit" class="btn btn-secondary">Comment</button>
</form>
</div>
