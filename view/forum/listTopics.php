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
</div>
  
