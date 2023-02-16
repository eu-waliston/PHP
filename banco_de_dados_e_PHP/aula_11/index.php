<?php
$pdo = new PDO("mysql:hots=localhost;dbname=modulo_8", 'root', '99583100');

$sql = $pdo->prepare("SELECT * FROM clientes  WHERE momento_registro BETWEEN '2023-02-14' AND '2023-02-15'");

$sql->execute();

$pessoas = $sql->fetchAll();

foreach ($pessoas as $key => $value) {
    echo $value['nome'];
}