<?php

// gerencia o processo de login e logout de usuários
class Login{
    
    private $db_connection = null;
    public $errors = array();
    public $messages = array();

    public function __construct(){
        session_start();

        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    private function dologinWithPostData(){

        //valida se usuario foi informado
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Favor informar o nome do usuário";
        } 
        //valida se senha foi informada
        elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Favor informar a senha";
        } 
        //Se usuário e senha informados
        elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            //Se a conexão com o banco for bem sucedida
            if (!$this->db_connection->connect_errno) {

                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                $sql = "SELECT nome, email, senha
                        FROM usuario
                        WHERE email = '" . $user_name . "';";
                
                $result_of_login_check = $this->db_connection->query($sql);
                
                //Se o usuário for cadastrado no banco
                if ($result_of_login_check->num_rows == 1) {

                    $result_row = $result_of_login_check->fetch_object();
                    
                    //Se a senha estiver ok
                    if (password_verify($_POST['user_password'], $result_row->senha)) {

                        // cria a sessão de login
                        $_SESSION['user_name'] = $result_row->nome;
                        $_SESSION['user_email'] = $result_row->email;
                        $_SESSION['user_login_status'] = 1;

                    } 
                    else {
                        $this->errors[] = "Senha inválida para usuário informado.";
                    }
                } else {
                    $this->errors[] = "Usuário não cadastrado.";
                }
            } else {
                $this->errors[] = "Não foi possível se conectar ao banco de dados.";
            }
        }
    }

    //Executa logout do usuário
    public function doLogout(){

        $_SESSION = array();
        session_destroy();
        $this->messages[] = "You have been logged out.";

    }

    //Retorna se o cliente esta logado: True ou False
    public function isUserLoggedIn(){
        
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}
