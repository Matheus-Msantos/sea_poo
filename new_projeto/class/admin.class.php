<?php

require_once ( __DIR__ . 'crud.class.php');
require_once ( __DIR__ . 'factory/factoryUser.class.php');
require_once ( __DIR__ . 'interface/interfaceUser.class.php');

class Admin extends CrudAdmin implements Usuario {
    private $nome;
    private $email;

    public function setDados($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getDados($nome, $email) {
        $dados = [$this->nome, $this->email];
		return $dados;
    }

    public function inset(){
        //Lógica
    }

    public function update(){
        //Lógica
    }    
}