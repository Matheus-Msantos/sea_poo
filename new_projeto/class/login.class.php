<?php 

require_once'dataBase.class.php';

class Login extends DataBase {
    
    public function __construct() {
        parent::__construct();

    }

    public function login() {
        
        if ( isset($_SESSION['login']) ) {
            
        }elseif ( isset($_POST['entrar']) ) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];
        
            $r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
            $reg = $r->fetch( PDO::FETCH_ASSOC );
            $hash = $reg['senha'];
        
            if( password_verify($senha, $hash) ) {
                $_SESSION['login'] = $login;
        
            } else{
                $msg = 'Credenciais inválidas, tente novamente!';
                
            }
        } 
    }

    public function validarLogin() {
        if ( !isset($_SESSION['login']) ) {
            header ('Location: index.php');
        }
    }

    public function sair() {    
        session_start();
        session_destroy();
        header('Location: index.php');
    }
}

// tentar mudar a parte de verufucar senhas para uma outra class 



