<?php
# Sessões 
# Cookies

session_start();
// $_SESSION['nome'] = 'Waliston';

setcookie("nome", "waliston", time()+(60*60+24), '/');

echo $_COOKIE['nome'];
