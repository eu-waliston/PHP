<?php
/*
    funcções para strings
*/

$conteudo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo facilis iusto eveniet ut nam rem officiis delectus. Nobis earum accusantium dolorem asperiores iusto voluptatum tempore quam, consectetur eum, rem repellendus.";

#serve para recortar uma STRING
echo substr($conteudo, 0, 20);

#EXPLODE  Recorta com base no que fora passado
$nome = "Waliston Euripedes Dos Santos";
$nomes = explode(' ', $nome);
print_r($nomes);

#IMPLODE Junta um array com u delimitador
#No caso espaço
$nomes = implode(' ', $nomes);
echo $nomes;

echo '<br />';

$conteudos = '<h1>Waliston</h1> Outra coisa';

#Strip_Tags retira todo o codigo HTML pra gente
echo strip_tags($conteudos);

echo '<br />';
#htmlentites mostra o cogido html da pagina, de uma maneira resumida.
echo htmlentities('<div><h1>Oi eu sou o Goku!</h1></div>');