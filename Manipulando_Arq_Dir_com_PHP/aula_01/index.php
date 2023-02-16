<?php

//criaqr arquivo novo
// $content = "Não estou entendendo...";
// file_put_contents('file.txt', $content);

// $content = file_get_contents('https://youtube.com');

$conteudo = "teste";

$fp = fopen("novo.txt", "wb");

fwrite($fp, $conteudo);

fclose($fp);