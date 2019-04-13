<?php

    //Validação de versão de browser
    include("libraries/compatibilidade.php");
    

    
        //Classe de registro de usuário.
        require_once("config/db.php");
        require_once("classes/Registration.php");
        $registration = new Registration();

        // show potential errors / feedback (from registration object)
        if (isset($registration)) {
            if ($registration->errors) {
                foreach ($registration->errors as $error) {
                echo $error;
                }
            }
            
            if ($registration->messages) {
                foreach ($registration->messages as $message) {
                echo $message;
                }
            }
        }

    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro de usuário</title>
    </head>
    <body>
        <h3>Cadastro de usuário
					<a href="aplicativos/agenda/origem.php">Teste Origem</a>
</h3>
        
        <form method="post" action="cadastro.php" name="registerform">

            <label for="login_input_compay">Nome da Empresa (De 2 a 11 caracteres)</label>
            <input id="login_input_company" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,11}" name="user_company" required /><br/>
            
            <!-- the user name input field uses a HTML5 pattern check -->
            <label for="login_input_username">Nome do Usuário (De 2 a 64 caracteres)</label>
            <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br/>

            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">Email</label>
            <input id="login_input_email" class="login_input" type="email" 
            name="user_email" required /><br/>

            <label for="login_input_password_new">Senha (mínimo de 6 caracteres)</label>
            <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br/>

            <label for="login_input_password_repeat">Repetir Senha</label>
            <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br/>
            
            <input type="submit"  name="register" value="Cadastrar" />

        </form>
    </body>
</html>

