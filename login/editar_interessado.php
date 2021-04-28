<?php

require_once 'db.php';

if ( isset($_POST['id']) ) {
    $id = preg_replace('/\D/', '', $_POST['id']);

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $estudouIngles =  $_POST['estudouIngles'];
    $nota = $_POST['nota'];
    $imagem = $_POST['MAX_FILE_SIZE'];
    $registro = $_POST['registro'];
    $mensagem = $_POST['mensagem'];
    $data = $_POST['data'];

    $objStmt = $db->prepare(" UPDATE Interessado SET nome = :nome, telefone = :telefone, email = :email,  estudouIngles = :estudouIngles, nota = :nota, registro = :registro, imagem = :MAX_FILE_SIZE, mensagem = :mensagem, data = :data WHERE id = :id ");

    $objStmt->bindParam(':id', $id);
    $objStmt->bindParam(':nome', $nome);
    $objStmt->bindParam(':telefone', $telefone);
    $objStmt->bindParam(':email', $email);
    $objStmt->bindParam(':estudouIngles', $estudouIngles);
    $objStmt->bindParam(':nota', $nota);
    $objStmt->bindParam(':MAX_FILE_SIZE', $imagem);
    $objStmt->bindParam(':mensagem', $mensagem);
    $objStmt->bindParam(':registro', $registro);
    $objStmt->bindParam(':data', $data);

    if ( $objStmt->execute() ) {
        $msg = 'Dados Atualizados!';  
    }else {
        $msg = 'ERRO ao atualizar os dados!';  
    }
}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;

//Evita SQL injection
$id = preg_replace('/\D/', '', $_GET['id']);

$interessado = array();

$consulta = (" SELECT id, nome, telefone, email, estudouIngles, quantoTempo, nota, imagem, mensagem, registro, data FROM Interessado WHERE id = $id");

foreach ( $db->query( $consulta ) as $registro ) {
    $interessado = $registro;
}


include 'editar_interessado_tpl.php';