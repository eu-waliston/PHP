<form method="post">
    <input type="text" name="address">
    <input type="submit" name="acao" value="Enviar">
</form>

<?php
#Requisições para outros servidores
#Exmeplo: Google Maps
# Obs: u need an API key !


if (isset($_POST['acao'])) {
    $url = urlencode($_POST['address']);
    $str = file_get_contents("http://api.positionstack.com/v1/forward?access_key={YOUR API KEY }=" . $url . "&timezone_module=1");

    $apiResult = json_encode($str);

    echo ($apiResult);
}