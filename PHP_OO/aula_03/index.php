<?php
# Final Class, Herança, Protected

// protected function funcaoTeste(){
//     echo 'Isso é uma funçaõ protected';
// }

#Não pode ser herada
// final class Filha {
//     public function printHello(){
//         echo 'Hello World';
//     }
// }

class Filha {
    public function printHello(){
        echo 'Hello World';
    }
}

class Pai extends Filha{
    public function mostratTchau() {
        echo "GoodBay World";
    }
}




$pai = new Pai;
$pai -> mostratTchau();
echo '<br />';
echo '<br />';
$pai -> printHello();
echo '<br />';
echo '<br />';

// $filha = new Filha;
// $filha -> printHello();

?>