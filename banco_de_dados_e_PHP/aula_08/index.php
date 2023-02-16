<?php

define('HOST', 'localhost');
define('DB', 'modulo_8');
define('USER', 'root');
define('PASSWORD', '99583100');

try {

    $pdo = new PDO('mysql:host' . HOST . 'dbname=' . DB, USER, PASSWORD, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo 'erro ao conectar';
}