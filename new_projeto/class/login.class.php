<?php 

require_once'typeUser.class.php';

class Login extends TypeUser {
    
    public function __construct() {
        parent::__construct();

    }

    public function validar() {
        
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
}





