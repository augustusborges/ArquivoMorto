<?php

                    require 'config.php';
                    require 'lib/Login.php';

                    $login = new Login();
                    $empresa = new empresa();

                    if(!$login->isUserLoggedIn()) {
                        if (isset($login)) {
                            if ($login->errors) {
                                foreach ($login->errors as $error) {
                                    echo $error;
                                }
                            }
                            if ($login->messages) {
                                foreach ($login->messages as $message) {
                                    echo $message;
                                }
                            }
                        }
                    }    













if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    
    if (($_POST['username'] != $user) || ($_POST['password'] != md5($pass))) {    
        header('Location: login.php');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }
}else{
    
}
    


?>