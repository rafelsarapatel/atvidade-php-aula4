<?php

$nome = readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$renda = (float) readline("Renda mensal: ");
$empre = (int) readline("Tempo de emprego (meses): ");
$liso = readline("Está negativado? (s/n): ");

$idadepm = $idade >= 18 && $idade <= 65;
$rendaoue = $renda >= 2000 || $empre >= 24;
$liso = $liso == ("s");

echo ("\nIdade permitida: ");
if ($idadepm){
    echo ("atendida\n");
}else{
echo ("não atendida\n");
}
echo "Renda ou estabilidade: ";
if ($rendaoue){
    echo ("atendida\n");
}else{
    echo ("não atendida\n");
}
echo ("Nome limpo: ");
if (!$liso){
    echo ("atendida\n");
}else{
    echo ("não atendida\n");
}

$creditoAprovado = ($idadepm && $rendaoue && !$liso);
if ($creditoAprovado) { 
    echo ("Resultado: Crédito aprovado para " . $nome); 
}else{ 
    echo ("Resultado: Crédito não aprovado para " . $nome); 
}

?>