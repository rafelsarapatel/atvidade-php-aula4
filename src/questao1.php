<?php
$num1 = (int) readline("qual o seu primeiro numero? ");
$num2 = (int) readline("qual o seu segundo numero? ");

if ($num1 > $num2) {
    echo ("\no maior numero é: ") . $num1;}
    elseif ($num2 > $num1 ) {
        echo ("\no maior numero é: ") . $num2;}
        elseif ($num1 == $num2) {
            echo ("\nos numeros sao iguais!");
        }



?>