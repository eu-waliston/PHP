<?php
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '99583100');

$pdo->exec("LOCK TABLES clientes WRITE");

sleep(10);