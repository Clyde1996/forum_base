<h1>Detail Topic</h1>
<?php

$topic = $result["data"]["topic"];
$posts = $result["data"]["posts"];
?>

<h1> <?=$topic->getTitle();?> </h1>  <!--Title De Topic-->

<?php
foreach($posts	as $post){
    ?>

    
    <p> <?=$post->getTexte();?> </p>

    <!-- le form delete topic -->

    <a href="index.php?ctrl=forum&action=deletePost&id=<?=$post->getId()?>">
    <i class="fa-sharp fa-solid fa-circle-minus"></i>
    </a> 


    <!-- le form update topic -->
    <a href="index.php?ctrl=forum&action=updateformPost&id=<?=$post->getId()?>">
    <i class="fa-regular fa-pen-to-square"></i>
    </a> 

    
 
    
    <?php

    

    
}
?>
<!-- index.php -> nom de fichier ::  ? -> indique le début des paramètres de l'URL :: ctrl=forum ->  C'est un paramètre nommé "ctrl" qui a la valeur "forum". ::  & -> L'esperluette est utilisée pour séparer plusieurs paramètres de l'URL. Ici, il sépare le premier paramètre "ctrl" du paramètre suivant. ::   action=formPost: C'est un autre paramètre nommé "action" avec la valeur "formPost" :: & sépare ce paramètre du suivant
id=< ?=$topic->getId()?> Ce paramètre nommé "id" a une valeur dynamique qui provient d'une variable PHP $topic->getId(). Il peut s'agir d'un identifiant unique d'un sujet de forum (par exemple) qui sera utilisé par le contrôleur pour effectuer une action spécifique concernant ce sujet. -->


 <!-- le form add topic-->
<a href="index.php?ctrl=forum&action=formPost&id=<?=$topic->getId()?>"> <!--Form Post c'est le "plus +" qui permetre de ajouter un Post et le function  --> 
    <i class="fa-sharp fa-solid fa-circle-plus fa-lg" style="color: #54626F;"></i>
    
</a>



