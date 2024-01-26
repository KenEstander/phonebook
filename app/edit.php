<?php
$ROOT_DIR="../";
include $ROOT_DIR . "templates/header.php";
$contact_list = contact()->list();
$Id = $_GET['Id'];
?>

?>
  <form style="width:50%;" action="process.php?action=edit-user&Id=<?=$Id?>" method="post">
    Name
    <input class="form-control" type="text" name="name" value="<?=$name?>" required>
    NUmber
    <input class="form-control" type="text" name="number" value="<?=$number?>" required>
    Age
    <input class="form-control" type="text" name="age" value="<?=$age?>" required>
    <br>
<button class="btn btn-primary" type="submit" name="button" >ADD</button>

</form>






<?php include $ROOT_DIR . "templates/footer.php"; ?>
