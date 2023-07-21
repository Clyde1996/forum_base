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
    <?php
}
?>

<a href="index.php?ctrl=forum&action=formTopic"> <!--Form topic c'est le plus qui permetre de ajouter un categorie-->
    <i class="fa-sharp fa-solid fa-circle-plus fa-lg" style="color: #54626F;"></i>
</a>

</div>
  
