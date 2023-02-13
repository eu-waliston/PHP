<?php

class Exemplo {
    private $var1;
    public $var2;

    // public static $var3 = 'Estatica';

    // public static function funf(){
    //     echo '<br/>FUNF';
    // }
    // /*Atributos private, somente estarão disponiveis dentro da nossa classe */
    // private function method() {
    //     //codigo
    // }

    // /*Public estará disponivel em todas as partes do codigo pra acessarmos */
    // public function method2() {
    //     //coddigo
    // }

    public function setVar1($var1){
        $this -> var1 = $var1;
         
    }

    public function getVar1() {
        return $this -> var1;
    }
}
