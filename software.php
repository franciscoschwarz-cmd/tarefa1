<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label> Informe um número:</label>
        <input type="text" name="num1" placeholder="Digite um numero"><br><br>
        <label> Informe o segundo número:</label>
        <input type="text" name="num2" placeholder="Digite outro numero"><br><br>
        <label> Informe o sinal:</label>
        <input type="text" name="sinal" placeholder="Digite o sinal"><br><br>
        <input type="submit" value="Salvar">

    </form>



    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sinal = $_POST['sinal'];
    if ($sinal == "+") {
        echo $num1 + $num2;
    }
    elseif ($sinal == "-") {
        echo $num1 - $num2;
    }
    elseif ($sinal == "*") {
        echo $num1 * $num2;
    }
    elseif ($sinal == "/") {
        echo $num1 / $num2;
    }
    



    ?>

</body>

</html>