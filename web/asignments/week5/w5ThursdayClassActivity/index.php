<?php 
    require "dbConnect.php";
    $db = get_db();
    $w5_event = $db->prepare("SELECT 8 FROM w5_event");
    $w5_event->execute(); 

    
?>