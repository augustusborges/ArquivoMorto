<?php

//Cadadstramento de novos usuários
class Registration
{

    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    //construtor da classe
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    private function registerNewUser()
    {
        //Validações de cadastramento
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Favor informar um nome de usuário";
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->errors[] = "Favor infirmar a senha de acesso";
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->errors[] = "A senha e a repetição precisam ser idênticas";
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->errors[] = "A Senha precisa ter no mínimo 6 caracteres";
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "O Nome do usuário deve estar entre 2 ou 64 caracteres";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->errors[] = "O Nome de usuário deve conter apenas letras de a-Z e números";
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "Favor informar um email";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "O email não deve exceder 64 caracteres";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "O Email informado não está em um formato válido";
        }
        //Se todos os dados foram informados de acordo com as regras...
        elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
        ) {

            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = "ERRO: 5000" . $this->db_connection->error;
            }

            // Se conexão bem sucedida
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));

                $user_password = $_POST['user_password_new'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM usuario WHERE nome = '" . $user_name . "' OR email = '" . $user_email . "';";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username / email address is already taken.";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO usuario (nome, senha, email)
                            VALUES('" . $user_name . "', '" . $user_password_hash . "', '" . $user_email . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "Sua conta foi criada com sucesso. Faça seu login.";
                    } else {
                        $this->errors[] = "Pro favor reveja os dados e teste novamente";
                    }
                }
            } else {
                $this->errors[] = "Não é possível se conectar ao banco. Por favor contate o Administrador";
            }
        } else {
            $this->errors[] = "Ocorreu um erro desconhecido.";
        }
    }
}
