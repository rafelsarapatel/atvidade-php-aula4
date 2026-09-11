<?php
$matri = readline("digite a primeira matricula: ");
$matri2 = readline("digite a segunda matricula: "); 

$resul = strcmp($matri, $matri2);

if ($resul < 0) {
    echo "Comparando como texto (strcmp): $matri vem primeiro\n";
} else {
    echo "Comparando como texto (strcmp): $matri2 vem primeiro\n";
}
if ($matri < $matri2) {
    echo "Comparando com o operador <: $matri vem primeiro";
} else {
    echo "Comparando com o operador <: $matri2 vem primeiro";
}





?>