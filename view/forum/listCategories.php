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

<a href="index.php?ctrl=forum&action=formCategory"> <!--Form category c'est le plus qui permetre de ajouter un categorie-->
    <i class="fa-sharp fa-solid fa-circle-plus fa-lg" style="color: #54626F;"></i>
</a>

</div>