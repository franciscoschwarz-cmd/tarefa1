<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label> Nome do hotel: </label>
        <input type="text" name="hotel" placeholder="Nome do hotel"><br><br>
        <label> Numero do quarto:</label>
        <input type="text" name="quarto" placeholder="Numero do quarto"><br><br>
        <input type="submit" value="Salvar">

    </form>
</body>
</html>

<?php
$hotel = $_POST['hotel'];
$quarto = $_POST['quarto'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("Seja bem-vindo(a) ao ") . $_POST['hotel'] . ("!") . ("Seu quarto é o ") . $_POST['quarto'] . (".");
}





?>