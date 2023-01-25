<?php
// Remove todos as mensagens de erros da tela, e as envia para o arquivo "errors.log
ini_set('display_errors', 0);
ini_set('error_log', 'errors.log');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos dados</title>
</head>
<body>
    <!-- Exemplo 1 (Calculadora) -->
    <?php
    $valor = $_POST['valor'];
    $operacao = $_POST['operacao'];

    if($operacao == "*"){
        $resultado = $valor * $valor;
        echo "<i>$valor</i> <b>*</b> <i>$valor </i>=<b> $resultado</b>";
    }
    elseif($operacao == "/") {
        $resultado = $valor / $valor;
        echo "<i>$valor</i> <b>/</b> <i>$valor</i> = $resultado";
    }
    elseif($operacao == "+"){
        $resultado = $valor + $valor;
        echo "<i>$valor</i> <b>+</b> <i>$valor</i> = $resultado";
    }
    elseif($operacao == "-"){
        $resultado = $valor - $valor;
        echo "<i>$valor</i> <b>-</b> <i>$valor</i> = $resultado";
    }
    else{
    }
    ?>

    <!-- Exemplo 2 (Dados de cadastro)-->
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = date("Y") - $_POST['nascimento'];
    $sexo = $_POST['sexo'];
    echo "<h3>Os cadastros foram: Nome = $nome, E-mail = $email, Idade = $idade, Sexo  = $sexo </h3>";
    ?>
    <a href="../index.html"> ↩Voltar</a>
</body>
</html>