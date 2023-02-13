<?php

namespace Sessao1;

use Sessao2\Class2;

class Class1
{
    function __construct()
    {
        echo 'Class 1 Instanciada';
        echo '<br />';
        new Class2;
    }
}
