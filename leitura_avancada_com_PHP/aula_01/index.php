<?php
echo "Lendo e escrevendo XML 🔥";
echo '<br /> <br />';


$xml = simplexml_load_string("arquivo.xml");
print_r($xml);

ini_set('display_errors', 1);

?>