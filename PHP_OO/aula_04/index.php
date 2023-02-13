<?php
#abstract, seld and +

#Serve apenas para ser herdada
abstract class Teste{
    public function func1() {
        echo 'chamando Func 1';
    }

    abstract function func2();
}

class Principal extends Teste {

    //Porém só podemos utilizar o metodo abstrato se declararmos ele aqui dentro da funça~oque extend a classe onde o mesmo se encontra
    public function func2(){
        echo 'Estoudeclarando oficialmente um metodo abstrato';
    }

    public static function metodoEstatico(){
        echo "Metodos estatico";
    }

    public function funcao(){
        // Principal::metodoEstatico();
        self::metodoEstatico();
    }
}

$principla = new Principal;

$principla -> funcao();
// $principla -> func1();

// $principla -> func2();

