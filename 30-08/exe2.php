<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label> Valor em reais:</label>
        <input type="text" name="valor" placeholder="Informe o valor em reais"><br><br>
        <label> Digite a cotação aqui:</label>
        <input type="text" name="cotacao" placeholder="Digite a cotação aqui:"><br><br>
        <input type="submit" value="Salvar">

    </form>
</body>
</html>

<?php
$valor = $_POST['valor'];
$cotacao = $_POST['cotacao'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("O valor em dolares é:  US$") . $_POST['valor'] /  $_POST['cotacao'];
}





?>