<?php

//Trás das pastas
require_once 'db.php';

//Evita SQL injection
$id = preg_replace('/\D/', '', $_GET['id']);

$db->exec(" DELETE FROM Interessado WHERE id = $id ");

header ('Location: interessado.php');