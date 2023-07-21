<?php


$category = $result["data"]["category"];
$topics = $result["data"]["topics"];

foreach($topics as $topic){
    ?>
    
    <p><?=$topic->getTitle()?></p>
    <p><?=$topic->getCreationdate()?></p>
    
   
   <?php
}