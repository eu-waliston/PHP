<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '99583100');

$sql = $pdo->prepare("SELECT * FROM clientes_02 ORDER BY  nome");

$sql->execute();
$clientes = $sql->fetchAll();

foreach ($clientes as $key => $value) {
    echo $value['nome'];
    echo '<br />';
}