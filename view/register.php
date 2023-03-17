<?php

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('APP_LANG', 'en');

include("../lib/db.php");
include("../lib/utils.php");
include("../lang/".APP_LANG.".php");

//It is very stupid to share passwords within GIT, but for demostration, we will close our eyes on this principle.
$dbhost = 'sql300.epizy.com';
$dbuser = 'epiz_33814210';
$dbpass = 'Lyt1H8R57NU8egA';
$dbname = 'epiz_33814210_todo';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

$vars=get_input_vars();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>
        <?php echo LANG_APP_NAME; ?>
    </title>
    <link href="static/css/mysite.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center main-row">
            <div class="col shadow main-col bg-white">
                <div class="row bg-primary text-white">
                    <div class="col p-2">
                        <h4>
                            <?php echo LANG_APP_NAME; ?>
                        </h4>
                    </div>
                </div>

                <form action="../index.php" method="get">
                    <input type="hidden" name="action" value="ask_register" />
                    <div class="col justify-content-between text-white p-2">

                        <div class="form-group flex-fill mb-2">
                            <label for='todo-email' class='text-primary'>Email</label>
                            <input id="todo-mail" name="email" type="email" class="form-control">
                        </div>

                        <div class="form-group flex-fill mb-2">
                            <label for='todo-password' class='text-primary'>Password</label>
                            <input id="todo-password" name="password" type="password" class="form-control">
                        </div>

                        <a href="./login.php" class="d-block w-100 ml-2">Already Have an account ? </a>

                        <button type="submit" class="btn btn-primary mb-2 ml-2 mt-2">
                            <?php echo LANG_REGISTER_USER; ?>
                        </button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</body>