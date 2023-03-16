<?php

switch($vars['action']){

    case "ask_login":{

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $db->query("SELECT * FROM `users` WHERE `users`.`Email` = '".$email."' AND `users`.`Password` = '".$password."' ;" )->fetchAll() ;

        $items = $db->query('SELECT * FROM `items` WHERE `items`.`user_id` = '.$user[0]["user_id"].' ;')->fetchAll();

        if(count( $user ) == 1){
            include("view/header.php");
            include("view/list.php");
            include("view/footer.php");
        } else {
            include("view/login.php");
        }        
                
        exit;
    }break;

    case "ask_register":{

        $db->query("INSERT INTO `users` (`Password`, `user_id`, `Email`) VALUES ( '".$vars['password']."' , NULL , '".$vars['email']."' ); ");
 
        header("location: index.php");
                
        exit;
    }break;

    case "login":{
        $items = $db->query('SELECT * FROM items')->fetchAll();
        
        include("view/login.php");
        exit;
    }break;

    case "do_add":{

        $db->query("INSERT INTO `items` (`item_id`, `title`, `create_time`, `user_id`) VALUES ( NULL , '".$vars['title']."', '"."' ,  '".$vars['user_id']."' ); ");

        $items = $db->query('SELECT * FROM `items` WHERE `items`.`user_id` = '.$vars['user_id'].' ;')->fetchAll();

        $user = $db->query("SELECT * FROM `users` WHERE `users`.`user_id` = ".$vars['user_id']." ;" )->fetchAll() ;

        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");

        exit;        
        
    }break;
    
    case "delete":{
        $db->query("DELETE FROM `items` WHERE `items`.`item_id` = ".$vars['item_id']." AND `items`.`user_id` = ".$vars['user_id']." ;");

        $items = $db->query('SELECT * FROM `items` WHERE `items`.`user_id` = '.$vars['user_id'].' ;')->fetchAll();

        $user = $db->query("SELECT * FROM `users` WHERE `users`.`user_id` = ".$vars['user_id']." ;" )->fetchAll() ;

        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");

        exit;
    }break;
    
    case "edit":{
        include("view/header.php");
        include("view/edit.php");
        include("view/footer.php");
        exit;

    }break;

    case "do_edit":{
        $db->query("UPDATE `items` SET `title` = '".$vars['title']."' WHERE `items`.`item_id` = ".$vars['item_id']." AND `items`.`user_id` = ".$vars['user_id']." ;");

        $items = $db->query('SELECT * FROM `items` WHERE `items`.`user_id` = '.$vars['user_id'].' ;')->fetchAll();

        $user = $db->query("SELECT * FROM `users` WHERE `users`.`user_id` = ".$vars['user_id']." ;" )->fetchAll() ;

        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");
    
        exit;  

    }break;
    
    case "help":{
        //some code here to show help 
        exit;
    }break;    
    
}

?>