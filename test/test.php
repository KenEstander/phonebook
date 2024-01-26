<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "templates/header.php";

  $message        =   "How are you?";
  $fullMessage    =  "Fred, " . $message;
  $strMsg         = $_GET["stringMessage"];

?>


 <div class="card" style="width:50%">
   <div class="card-body">
    <?=$strMsg?>
   </div>
 </div>
