<?php

switch($vars['action']){
    case "list":{
        $items = $db->query('SELECT * FROM items')->fetchAll();
        
        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");
        exit;
    }break;

    case "do_add":{
        $db->query("INSERT INTO items (title) VALUES (?)",$vars['title']);
        header("location: index.php");
        exit;        
        
    }break;
    
    case "delete":{
        //Some code here to delete ....
        exit;        
    }break;
    
    case "edit":{
        include("view/header.php");
        include("view/edit.php");
        include("view/footer.php");
        exit;

    }break;

    case "do_edit":{
        $db->query("UPDATE `items` SET `title` = '".$vars['title']."' WHERE `items`.`item_id` = ".$vars['item_id'].";");
        header("location: index.php");
        exit;  

    }break;
    
    case "help":{
        //some code here to show help 
        exit;
    }break;
    
    
}

?>