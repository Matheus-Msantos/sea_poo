<?php

session_start();

//Tras das pastas
require_once 'db.php';

if ( isset($_SESSION['login']) ) {
    include 'interessado.php';
}elseif ( isset($_POST['entrar']) ) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
    $reg = $r->fetch( PDO::FETCH_ASSOC );
    $hash = $reg['senha'];

    if( password_verify($senha, $hash) ) {

        $_SESSION['login'] = $login;

        include 'interessado.php';
    } else{
        $msg = 'Credenciais inválidas, tente novamente!';
        
        include 'index_tpl.php';
    }
} else{
    
    //Leva para as pastas
    include 'index_tpl.php';
}