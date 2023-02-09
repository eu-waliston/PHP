<?php
//tipos de varaiveis

// number podem ser -> int,float etc
$idade = 25;

//string -> repressenta uma cadeia de caracteres
$nome = "waliston";

//boolean -> pode mser true ou false
$namora = false;
$result;
if($namora === false) {
    $result = "Não";
} else {
    $result = "SIM";
}

//no php para concatenar strings usamos o ponto . 
print "nome ".$nome." idade ".$idade." namorando: ".$result;
