<?php

$categories = $result["data"]["categories"];

?>
<div class="card">
<h1>Liste des Categories</h1>

<?php
foreach($categories as $category){
    ?>

   <a href="index.php?ctrl=forum&action=detailCategory&id=<?=$category->getId()?>"><?=$category->getNom(); ?></a> <!-- on recupere le nom depuis entities/category -->
    <?php
}


?>
</div>