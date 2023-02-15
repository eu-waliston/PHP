<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '99583100');

// $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2");

// $sql->execute();

// $info = $sql->fetchAll();

// echo '<pre>';
// print_r($info);
// echo '</pre>';

// foreach ($info as $key => $value) {
//     echo 'Titulo ' . $value['titulo'];
//     echo '<br />';
//     echo 'Noticia ' . $value['conteudo'];
//     echo '<hr />';

// }

// for ($i = 0; $i < count($info); $i++) {
//     echo 'Titulo ' . $info[$i]['titulo'];
//     echo '<br />';
//     echo 'Noticia ' . $info[$i]['conteudo'];
//     echo '<hr />';
// }

$sql = $pdo->prepare("SELECT * FROM categorias");

$sql->execute();

$info = $sql->fetchAll();

// foreach ($info as $key => $value) {
//     $ccategoria_id = $value['categoria_id'];
//     echo 'Exibindo post de: ' . $value['nome'];
//     echo '<br />';
//     $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = categoria_id ");
//     $sql->execute();
//     $infoPosts = $sql->fetchAll();

//     foreach ($infoPosts as $key => $value) {
//         echo 'Titulo ' . $value['titulo'];
//         echo '<br />';
//         echo 'Noticia ' . $value['conteudo'];
//         echo '<hr />';
//     }
// }

$sql = $pdo->prepare("SELECT * FROM posts INNER JOIN  categorias ON posts.categoria_id = categorias.id ");
$sql->execute();
$info = $sql->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($info);
echo '<pre />';