
<h1>Liste des Posts</h1>

<?php

$posts = $result["data"]["posts"]

?>

<?php

foreach($posts as $post){

?>

<p><?=$post->getDateCreation();?></p>
<p><?=$post->getTexte();?></p>



<?php

}

?>