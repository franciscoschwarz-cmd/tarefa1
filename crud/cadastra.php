<?php
$host = "localhost";
$porta = "5432";
$database = "crud";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $ano = $_POST['ano'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO cadastro (nome, ano, cidade, estado) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$nome, $ano, $cidade, $estado]);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de times</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #4de607ff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            height: 45px;
            font-size: 16px;
            line-height: 25px;
        }

        .success {
            text-align: center;
            color: green;
            margin-top: 15px;
        }

        #botaoOutraPagina {
            display: block;
            margin-top: 20px;
            width: 100%;
            background: #e60707;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            height: 45px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            line-height: 45px;
        }
    </style>
</head>

<body>
    <form method="POST">
        <h2>Cadastro de time</h2>
        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>Ano de fundação</label>
        <input type="text" name="ano" required>

        <label>Cidade</label>
        <input type="text" name="cidade" required>

        <label>Estado</label>
        <input type="text" name="estado" required>

        <input type="submit" value="Salvar">
        <a href="index.html" id="botaoOutraPagina">Ir para outra página</a>
    </form>
</body>

</html>