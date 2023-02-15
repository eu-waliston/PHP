<?php
date_default_timezone_set('America/Sao_Paulo');

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', '', '');

if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H:i:s');

    $sql = $pdo->prepare("INSERT INTO clientes    VALUES (null,?,?,?)");

    $sql->execute([$nome, $sobrenome, $momento_registro]);
    echo 'Cliente Inserido com sucesso :)';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Banco</title>
</head>

<body>
    <form method="post">
        <label for="name">NOME: </label>
        <input type="text" name="nome" required>
        <br>
        <label for="sobrenome">SOBRENOME: </label>
        <input type="text" name="sobrenome" required>
        <br>
        <input type="submit" value="ENVIAR!" name="acao">
    </form>
</body>

</html>