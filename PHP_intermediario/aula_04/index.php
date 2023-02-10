<?php

#Entendendo funções nativas do PHP
#E criando funções

print "Calculadora <br />";
function multiplicacao($a)
{
    for ($i = 0; $i < 11; $i++) {
        print $a . " x " . $i . " = " . ($a * $i)."<br />";
    }
}

multiplicacao(2);