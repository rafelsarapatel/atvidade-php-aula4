<?php
$valor = (float) readline("Ola bom dia! qual o valor do seu pedido");
$cart = readline("voce possui cartao de credito? (s ou n?");
$pix = readline("voce possui pix? ");

if ($cart == "s" || $pix == "s") {
    echo("pagamento aprovado no valor de R$" . $valor);}
    else {
        echo("pagamento recusado!, voce ta liso");
    }

?>