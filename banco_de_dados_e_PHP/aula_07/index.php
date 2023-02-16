<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '99583100');

$sql = $pdo->prepare("SELECT * FROM clientes_02 right join nome_cargo  on clientes_02.cargo = nome_cargo.id");

$sql->execute();

$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'];
    echo $value['nome_cargo'];
    echo '<br />';
}