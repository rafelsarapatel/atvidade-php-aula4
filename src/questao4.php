<?php
$user = readline("ola! Digite seu usuario: ");
$sen = readline("digite a senha do usuario: ");

$credenciaisvalidas = strcasecmp ($user, "admin") === 0 && $sen === "php2026";
if ($credenciaisvalidas){
    echo ("\n bem vindo admin");
}
else{
    echo ("\n usuario ou senha incorretos!");
}





?>