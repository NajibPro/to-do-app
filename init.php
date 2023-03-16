<?php

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('APP_LANG', 'en');

include("lib/db.php");
include("lib/utils.php");
include("lang/".APP_LANG.".php");

//It is very stupid to share passwords within GIT, but for demostration, we will close our eyes on this principle.
$dbhost = 'sql300.epizy.com';
$dbuser = 'epiz_33814210';
$dbpass = 'Lyt1H8R57NU8egA';
$dbname = 'epiz_33814210_todo';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

$vars=get_input_vars();

?>