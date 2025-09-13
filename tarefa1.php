<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label> Qual o tipo do seu veiculo:</label>
        <input type="text" name="veiculo" placeholder="Digite seu veiculo"><br><br>
        <label> Quantas horas o veiculo ficou estacionado:</label>
        <input type="number" name="horas" placeholder="Quantas horas o veiculo ficou estacionado"><br><br>
        <input type="submit" value="Salvar">

    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $veiculo = $_POST['veiculo'];
    $horas = $_POST['horas'];
    $preco;



    if ($veiculo == "carro") {
        if ($horas < 1) {
            $preco = 6;
        }
        if ($horas > 3) {
            $preco = 15;
        } else {
            $preco = 10;
        }
    }
    if ($veiculo == "moto") {
        if ($horas < 1) {
            $preco = 3;
        }
        if ($horas > 3) {
            $preco = 7;
        } else {
            $preco = 5;
        }
    }
    echo ("Valor a ser pago: $preco");
}
