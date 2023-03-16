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
    <div class="container">
        <div class="row justify-content-center align-items-center main-row">
            <div class="col shadow main-col bg-white">
                <div class="row bg-primary text-white">
                    <div class="col  p-2">
                        <h4>
                            <?php echo LANG_APP_NAME; ?>
                        </h4>
                    </div>
                </div>

                <form action="index.php" method="get">
                    <input type="hidden" name="action" value="ask_login" />
                    <div class="column justify-content-between text-white p-2">

                        <div class="form-group flex-fill mb-2">
                            <input id="todo-mail" name="email" type="email" class="form-control">
                        </div>

                        <div class="form-group flex-fill mb-2">
                            <input id="todo-password" name="password" type="password" class="form-control">
                        </div>

                        <a href="./view/register.php" class="d-block w-100 ml-2">Do not have an account ? </a>

                        <button type="submit" class="btn btn-primary mb-2 ml-2 mt-2">
                            <?php echo LANG_LOGIN_USER; ?>
                        </button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</body>