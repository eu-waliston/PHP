<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '99583100');

$sql = $pdo->prepare("select * from clientes");

$sql->execute();

$nome = $sql->fetchAll();

foreach ($nome as $key => $value) {
    echo $value['nome'];
    echo '<hr />';
}