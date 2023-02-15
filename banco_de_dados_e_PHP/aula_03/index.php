<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '99583100');

$id = 3;

// OR functiona copmop 'ou' 
// AND functiona como 'e'

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Kaio', sobrenome='Jose' WHERE id=$id");

if ($sql->execute()) {
    echo "cliente atualizado com sucesso :)";
}