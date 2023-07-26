<?php

$topics = $result["data"]['topics'];
    
?>
<div class="card">
<h1>Liste des topics</h1>

<?php
foreach($topics as $topic ){

    ?>
    <a href="index.php?ctrl=forum&action=detailTopic&id=<?=$topic->getId()?>"><p><?=$topic->getTitle()?></p></a> <!-- on recupere Title depuis entities/topic -->
    <p><?=$topic->getCreationdate()?></p>
    <p>Catégorie : <?=$topic->getCategory()->getNom()?></p>
    <p>Auteur : <?=$topic->getUser()->getUsername()?></p>

    <a href="index.php?ctrl=forum&action=deleteTopic&id=<?=$topic->getId()?>" method="post"> <!-- le form que on a cree dans le forum controller avec le function qui est lie dans le addOrUpdatePost.php  --> 
    <i class="fa-sharp fa-solid fa-circle-minus"></i>
    </a>

    <?php
}
?>

<!--Form topic c'est le plus qui permetre de ajouter un categorie-->
<a href="index.php?ctrl=forum&action=formTopic"> 
    <i class="fa-sharp fa-solid fa-circle-plus fa-lg" style="color: #54626F;"></i>
</a>

</div>
  
