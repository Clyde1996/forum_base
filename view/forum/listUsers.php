<?php

$users = $result["data"]["users"];

?>

<div class="card">
<h1>Liste de Users</h1>

<?php

foreach($users as $user){
    ?>
    <?=$user->getUsername(); //-- on recupere UserName depuis entities/user?>
  <?php
} 

?>
</div>