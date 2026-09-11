<?php
$idade =(int) readline("qual sua idade? ");

if ($idade < 7){
    echo("\nidade nao permitida para inscricao");
}elseif ($idade >= 7 && $idade <= 11){
echo ("\ncategoria: infantil");}
elseif ($idade >= 12 && $idade <= 16){
    echo("\ncategoria: juvenil");
}elseif($idade >= 17 && $idade <=59){
    echo("\ncategoria: adulto");
}elseif($idade >= 60){
    echo("\n categoria: master ");
}


?>