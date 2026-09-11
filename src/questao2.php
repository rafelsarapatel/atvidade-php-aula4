<?php
$idade = (int) readline("qual sua idade? ");
$ingresso = readline("Voce tem ingresso?? (s ou n):");

$acessoliberado = $idade >= 18 && $ingresso == "s";

if($acessoliberado) {
echo("Acesso negado"); }
else {
echo("Entrada liberada"); }



?>