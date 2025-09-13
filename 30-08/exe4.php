<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label> Preço original do produto: </label>
        <input type="text" name="valor" placeholder="Preço original do produto"><br><br>
        <label> Percentual de desconto:</label>
        <input type="text" name="desconto" placeholder="Percentual de desconto"><br><br>
        <input type="submit" value="Salvar">

    </form>
</body>
</body>
</html>

<?php
$valor = $_POST['valor'];
$desconto = $_POST['desconto'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("O novo preco com desconto é de ") . ($_POST['valor'] /  $_POST['desconto']) * 9;
}





?>