<?php
if(isset($_POST['id_membro'])) {
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto', 'root', '99583100');

    $sql = $pdo -> prepare("DELETE FROM td_equipe WHERE id = ?");

    $sql -> execute([$_POST['id_membro']]);    
}
?>