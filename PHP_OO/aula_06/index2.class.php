<?php
class Class1{

    private $nome;
    private $idade;

    function __construct($nome, $idade){
        $this -> nome = $nome;
        $this -> idade = $idade;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function getIdade() {
        return $this -> idade;
    }
}