<?php

include("init.php");

// if there exists a payload ( item_id in our case , go to do_edit)
if (isset($_GET['payload'])){
    $vars['action']='do_edit';
    $vars['item_id']=$_GET['payload'];
    $vars['user_id']=$_GET['user_id'];

}

if ( $vars['action']=='ask_login'){
    $vars['action']='ask_login';
    
    include("modules/todo.php");
    exit;
}

if ( $vars['action']=='ask_register'){
    $vars['action']='ask_register';
    
    include("modules/todo.php");
    exit;
}

if (isset($_GET['add_item'])){
    $vars['action']='do_add';
    
    $vars['user_id']=$_GET['add_item'];

    include("modules/todo.php");
    exit;
}


if (!isset($vars['action'])){
    $vars['action']='login';
}

include("modules/todo.php");
?>