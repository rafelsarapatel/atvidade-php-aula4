<?php
$nome = readline("qual seu nome? ");
$nota = (float) readline("qual sua nota? ");

$recuperacao = $nota >= 5 && $nota < 7;
$reprovado = $nota < 5;
$aprovado = $nota >=7;

$nota = number_format($nota, 2, ',', '.');

if ($recuperacao){
    echo($nome . "\nVoce esta de recuperacao");
}
elseif($aprovado){
    echo($nome . "\nVoce foi aprovado!!!!!");
}
elseif ($reprovado){
    echo($nome . "\nVoce foi reprovado kkkk");
}


?>