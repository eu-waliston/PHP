<?php

class Pessoa {
    private $nome = "waliston";
    private $idade = "25";
    private $peso = "?";

    public function crecer() {
        $this -> comer(); 
        echo 'Estou crescendo';
    }

    private function comer(){
        echo 'Estou comendo';
    }
}

//Instanciando as classes
$pessoa = new Pessoa;

$pessoa -> crecer();