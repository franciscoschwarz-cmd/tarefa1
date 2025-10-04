<?php
$host = "localhost";
$porta = "5432";
$database = "atividade-3";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nascimento'];
    $salario = $_POST['salario'];

    $sql = "INSERT INTO funcionarios (data_nascimento, nome, salario) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$data_nasc, $nome, $salario]);

    echo "<p class='success'>Funcionário cadastrado com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro de Funcionários</title>
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
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        width: 350px;
    }
    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }
    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
        color: #555;
    }
    input[type="text"], input[type="number"], input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
    }
    button {
        margin-top: 20px;
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }
    button:hover {
        background-color: #45a049;
    }
    .success {
        text-align: center;
        color: green;
        margin-top: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<form method="POST">
    <h2>Cadastro de Funcionários</h2>
    <label>Nome</label>
    <input type="text" name="nome" required />
    <label>Data de Nascimento</label>
    <input type="date" name="data_nascimento" required />
    <label>Salário</label>
    <input type="number" step="0.01" name="salario" required />
    <button type="submit">Salvar</button>
</form>
</body>
</html>
