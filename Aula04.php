<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
    <style>
        .p-info{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #000;
            font-size: 17pt;
        }
    </style>
</head>
<body>
    <h1>Vriáveis</h1>
    <?php
        // Criando Variáveis
        $name = (string) "Lucas";
        $age = (int) 18;
        
    // Saída de Informações
        echo "<p class='p-info'> Nome: $name; <br/>
        Idade: $age. </p>";
    ?>
</body>
</html>