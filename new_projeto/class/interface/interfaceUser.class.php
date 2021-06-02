<?php

interface Usuario  {
    private $nome;
    private $email;

    public function setDados();
    public function getDados();
    public function inset();
    public function update();
}
