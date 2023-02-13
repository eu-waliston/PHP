<?php
#constantes em PHP_OO

class minhaClass
{
    const VALOR = 300;
    public function __construct() {
        echo self::VALOR;
    }
}
#Acessando o objeto de dentro da calsse
new minhaClass();
echo '<br />';
#Acesando de fora da classe
echo minhaClass::VALOR;