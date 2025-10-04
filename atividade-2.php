<?php
$host = "localhost";
$porta = "5432";
$database = "atividade-2";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $codigo = $_POST['codigo_barras'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (codigo_barras, descricao, preco) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$codigo, $descricao, $preco]);


}
?>

<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
<meta charset="UTF-8">
<title>Cadastro de Produtos</title>
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
    input[type="text"], input[type="number"] {
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
        background-color: #52615eff;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        
    }
    button:hover {
        background-color: #52615eff;
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
    <h2>Cadastro de Produtos</h2>
    <label>Código de Barras</label>
    <input type="text" name="codigo_barras" required />
    <label>Descrição</label>
    <input type="text" name="descricao" required />
    <label>Preço</label>
    <input type="number" step="0.01" name="preco" required />
    <button type="submit">Salvar</button>
</form>
</body>
</html>
