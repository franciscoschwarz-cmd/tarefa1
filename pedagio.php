<?php
$eixos = 3;
$valorEntregue = 5;
$valorDevido = 5.80;
$valorPago = 6.00;

echo ("Para quem usa moto, o valor a ser pago é de R$2,90<br>");
echo ("Para quem usa carro, o valor a ser pago é de R$5,80<br>");
echo ("Para quem usa caminhão, o valor a ser pago é de R$" . ($eixos * 5.80) . "<br>");
echo ("Meu veículo é um carro<br>");
echo ("O valor entregue foi R$" . $valorEntregue . "<br>");
echo ("Valor devido: R$" . $valorDevido . "<br>");
echo ("Valor pago: R$" . $valorPago . "<br>");

if ($valorPago < $valorDevido) {
    echo ("DINHEIRO INSUFICIENTE<br>");
}

if ($valorPago >= $valorDevido) {
    echo ("DINHEIRO SUFICIENTE<br>");
    echo ("CANCELA LIBERADA<br>");
}

if($valorPago > $valorDevido) {
    echo($valorPago - $valorDevido);
}
