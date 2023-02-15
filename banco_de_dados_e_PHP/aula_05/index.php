<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', '', '');

$id = 2;

// OR functiona copmop 'ou' 
// AND functiona como 'e'

//Slq injection pra prevenir use ? e passe parametros 
//no formato array dentro do execute
$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

if ($sql->execute([$id])) {
    echo "cliente Deletado com sucesso :)";
}