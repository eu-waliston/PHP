<?php
$pdo = new PDO("mysql:hots=localhost;dbname=modulo_8", 'root', '99583100');

$sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%g%'");

$sql->execute();

$nomes = $sql->fetchAll();

foreach ($nomes as $key => $value) {
    echo $value['nome'];
}