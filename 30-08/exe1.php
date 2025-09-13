<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label> Informe o ano de nascimento:</label>
        <input type="text" name="ano1" placeholder="Informe o ano de nascimento"><br><br>
        <label> Informe o ano atual:</label>
        <input type="text" name="ano2" placeholder="Informe o ano atual"><br><br>
        <input type="submit" value="Salvar">

    </form>

</body>

</html>

<?php
$ano1 = $_POST['ano1'];
$num2 = $_POST['ano2'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("Você tem ou fará ") . $_POST['ano1'] -  $_POST['ano2'] . (" anos.");
}





?>