<?php

    if (version_compare(PHP_VERSION, '5.3.7', '<')) {
        exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
    } 
    else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
        require_once("libraries/password_compatibility_library.php");
    }

    require_once("config/db.php");
    require_once("classes/Login.php");

    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        header('Location: index.php');
    }    
    else {
        include("views/not_logged_in.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login de acesso</title>
    </head>
    <body>
        <h3>Login de Acesso</h3>
        
        <form method="post" action="acesso.php">
            <label for="login_input_username">Email</label>
            <input id="login_input_username" class="login_input" type="text" name="user_name" required /><br />

            <label for="login_input_password">Senha</label>
            <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required /><br />

            <input type="submit"  name="login" value="Log in" />
        </form>
    </body>
</html>