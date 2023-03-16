<?php

include("init.php");

// if there exists a payload ( item_id in our case , go to do_edit)
if (isset($_GET['payload'])){
    $vars['action']='do_edit';
    $vars['item_id']=$_GET['payload'];
}

if ( isset($_GET['ask_login'])){
    $vars['action']='ask_login';
}


if( !isset($_GET['user_id'])){
    $vars['action'] = 'login';
}

if (!isset($vars['action'])){
    $vars['action']='list';
}

include("modules/todo.php");
?>