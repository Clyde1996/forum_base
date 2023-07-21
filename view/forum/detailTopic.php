<h1>Detail Topic</h1>
<?php

$topic = $result["data"]["topic"];
$posts = $result["data"]["posts"];



foreach($posts	as $post){
    ?>

    
    
    <p> <?=$post->getTexte();?> </p>
    
 
    
    <?php

    
}
?>

