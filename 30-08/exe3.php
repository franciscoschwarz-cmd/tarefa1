<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST">
        <label> Digite seu primeiro nome:</label>
        <input type="text" name="nome" placeholder="Digite seu primeiro nome"><br><br>
        <label> Digite seu segundo nome:</label>
        <input type="text" name="sobrenome" placeholder="Digite seu segundo nome"><br><br>
        <input type="submit" value="Salvar">

    </form>
</body>
</html>

<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("Sugestão de e-mail: $nome.$sobrenome@hassmann.com.br");
}





?>