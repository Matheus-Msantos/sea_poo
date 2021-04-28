<?php

//Trás das pastas
require_once 'db.php';

//Preparando consulta
$objStmt = $db->prepare(' INSERT INTO Interessado (nome, telefone, email, estudouIngles, quantoTempo, nota, imagem, mensagem, registro, data) 
                          VALUES (:nome, :telefone, :email, :estudouIngles, :tempoDeCurso,  :nota, :imagem, :mensagem, :registro, :data) ');


//Valor enviado do formúlario 
$objStmt->bindParam(':nome', $_POST['nome']);
$objStmt->bindParam(':telefone', $_POST['telefone']);
$objStmt->bindParam(':email', $_POST['email']);
$objStmt->bindParam(':estudouIngles', $_POST['estudouIngles']);
$objStmt->bindParam(':tempoDeCurso', $_POST['tempoDeCurso']);
$objStmt->bindParam(':nota', $_POST['nota']);
$objStmt->bindParam(':imagem', $_POST['MAX_FILE_SIZE']);
$objStmt->bindParam(':mensagem', $_POST['mensagem']);
$objStmt->bindParam(':registro', $_POST['registro']);
$objStmt->bindParam(':data', $_POST['data']);

if ( $objStmt->execute() ) {
    $msg = 'Obrigado pela preferência, logo entraremos em contato!';  
}else {
    $msg = 'OPS, parece que seus dados não forem enviado, tente novamente!';  
}

//Leva para as pastas
include 'grava_interessado_tpl.php';


