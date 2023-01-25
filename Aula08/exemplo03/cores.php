<?php
$texto = isset($_POST["texto"]) ? $_POST["texto"] : "Texto Genérico";
$tamanho = isset($_POST["tamanho"]) ? $_POST['tamanho'] : "12pt";
$cor = isset($_POST["cor"]) ? $_POST["cor"] : "#000000";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
    <style>
        span.texto{
            font-size: <?php echo $tamanho?>;
            color: <?php echo $cor?>
        }
    </style>
</head>
<body>

    <span class="texto"><?php echo "$texto."?></span>
    <br><br>
    <a href="./index.html">↩Voltar</a>
</body>
</html>