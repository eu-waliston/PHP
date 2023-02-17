<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/PHP/Web_sevices_e_API/aula_02/index.php");
curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['request' => 'name_return']));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);

$result = json_encode($server_output);

echo $result;
?>