<?php
/*
    #Funções para manipular arrays
*/
$frutas = ["maça", "banana", "laranja", "uva"];
$doces = ["bolo", "chocolate", "paçoca", "pudim"];

#serve para unir um ou mais arrays :)
$balanceamento = array_merge($frutas, $doces);
print_r($balanceamen);



$frutas = ["maça", "banana", "laranja", "uva"];
$doces = ["bolo", "chocolate", "paçoca", "pudim"];

#serve rpara retorar valores com a mesma chave em 1 ou +
print_r(array_intersect_key($frutas, $doces));


$frutas = ["<p>maça</p>", "banana", "<h1>laranja</h1>", "uva"];
//Array map server para aplicar uma função em todos os valores do arays 
print_r(array_map('strip_tags', $frutas));
