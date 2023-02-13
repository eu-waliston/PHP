<?php
include('pessoa.php');

$exemplo = new Exemplo;
$exemplo-> setVar1("Waliston");
echo $exemplo -> getVar1();

// $exemplo -> var2 = "Waliston";

// echo $exemplo -> var2;

//Para acessar uma variavel estatica precisamos dessa sintaxe aqui
//Com o uso de :: para acessar o nivel de classe
// echo Exemplo::$var3;
// echo Exemplo::funf();

?>


