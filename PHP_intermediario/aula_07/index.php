<?php
/*
    * Switch
    * Continue
    * Break


$nome = "Waliston";

switch ($nome) {
    case 'Felipe':
        echo "Felipe";
        break;
    case 'Waliston':
        echo "Waliston";
        break;
    default:
        echo "Nenhum dos nomes";
        break;
}

*/

//podemos utilizar o BREAK para loop, while e foreach e no switch
for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo '<br />';
    
    if($i == 5) break;
  
}

