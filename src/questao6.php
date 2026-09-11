<?php 
$nota = readline("qual sua nota? ");

if (!is_numeric($nota) || $nota < 0 || $nota > 10){
    echo("digite um numero entre 0 e 10: ");
}
else{
    $nota = (float) $nota;
    echo("nota registrada! " . $nota);
}
?>