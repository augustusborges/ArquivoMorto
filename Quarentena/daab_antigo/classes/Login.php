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

                //Pega o user name informado pelo usuário no formulario
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                //monta a pesquisa no banco
                $sql = "SELECT id, nome, email, senha, empresa
                        FROM usuario
                        WHERE email = '" . $user_name . "';";
                
                
                $result_of_login_check = $this->db_connection->query($sql);
                
                //Se o usuário for cadastrado no banco
                if ($result_of_login_check->num_rows == 1) {

                    $result_row = $result_of_login_check->fetch_object();
                    
                    //Se a senha estiver ok
                    if (password_verify($_POST['user_password'], $result_row->senha)) {

                        // cria a sessão de login
                        $_SESSION['user_id'] = $result_row->id;
                        $_SESSION['user_name'] = $result_row->nome;
                        $_SESSION['user_email'] = $result_row->email;
                        $_SESSION['user_empresa'] = $result_row->empresa;
                        $_SESSION['user_login_status'] = 1;
                        
                        $this->insertLogginData();

                    } 
                    else {
                        $this->errors[] = "Senha inválida para usuário informado.";
                    }
                } else {
                    $this->errors[] = "Usuário não cadastrado.";
                }
                $fechado = mysqli_close($this->db_connection);
            } 
            else {
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

    //Insere o registro de acesso de usuário na base
    public function insertLogginData(){
        $this->conexao = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        //Se a conexão com o banco for bem sucedida
        if (!$this->conexao->connect_errno) {

            $usuario = $_SESSION['user_id'];
            
            setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
            date_default_timezone_set( 'America/Sao_Paulo' );
            $dia = strftime( '%Y-%m-%d %H:%M:%S', strtotime('now'));
                            
            $sql = "Insert Into controle_acesso (usuario, data)
                    values ('$usuario', '$dia')";
                
            $result_of_login_check = $this->conexao->query($sql);
            
            mysqli_close($this->conexao);
        }
    }
}
