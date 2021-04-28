<?php

require_once 'db.php';

// Consultar tabela de interessados
$tabela = array();

$consulta = (' SELECT id, nome, telefone, email, estudouIngles, quantoTempo, nota, imagem, mensagem, registro, data FROM Interessado ORDER BY id desc');

foreach ( $db->query( $consulta ) as $reg ) {
    $tabela[ $reg['id'] ] = [ 'nome' => $reg['nome'], 'telefone' => $reg['telefone'], 'email' => $reg['email'], 'estudouIngles' => $reg['estudouIngles'], 'quantoTempo' => $reg['quantoTempo'], 'nota' => $reg['nota'], 'imagem' => $reg['imagem'], 'mensagem' => $reg['mensagem'], 'registro' => $reg['registro'], 'data' => $reg['data'] ];
}
