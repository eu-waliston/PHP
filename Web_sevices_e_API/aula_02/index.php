<?php
#Curl
if (isset($_POST['request']) && $_POST['request'] == 'name_return') {
    die(json_encode(['resultado' => 'waliston']));
}

echo "???";
?>