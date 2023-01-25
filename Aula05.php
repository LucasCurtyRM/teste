<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05</title>
    <style>
        h2{
            color: blue;
        }
        b{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Valores Aritméticos</h1>
    <?php
        $n1 = (int) 10;  
        $n2 = (float) 2.5;
    echo "<h2> Número 1: $n1; Número 2: $n2.</h2>";
        // Adição
            $soma = $n1 + $n2;
    echo "<b>$n1</b> + <b>$n2</b> é igual a <b>$soma</b> <br><br>";
        // Subtração
            $subtracao = $n1 - $n2;
    echo "<b>$n1</b> - <b>$n2</b> e igual a <b>$subtracao</b>. <br><br>";
        // Multiplicação
            $multiplicação = $n1 * $n2;
    echo "<b>$n1</b> x <b>$n2</b> é igual a <b>$multiplicação</b>. <br><br>";
        // Divisão
            $divisao = $n1 / $n2;
            echo "<b>$n1</b> / <b>$n2</b> é igual a <b>$divisao</b>.<br><br>";
    ?>
    <h1>Funções Matemáticas</h1>
    <?php
        // Valor absoluto   
        $n3 = -5;
    echo "O valor absoluto de <b>$n3</b> é <b>" . abs($n3) . "</b>.<br><br>";
        // Potenciação
        $n4 = 3;
        $pot = 7;
    echo "O valor de <b>$n4<sup>$pot</sup></b> é <b>" . pow($n4,$pot) . "</b>.<br><br>";
        // Raiz
        $n5 = 9;
        echo "A Raiz de <b>$n5</b> é <b>". sqrt($n5) . "</b>.<br><br>";
        // Arredondamento
        $n6 = 4.33;
        echo "O valor de <b>$n6</b> arredondado é <b>" . round($n6) . "</b>.<br><br>"; //ceil -> Aredonda para o cima; floor -> arredonda para baixo
        // Valor em Moeda
        $n7 = 10350;
        echo "O valor de <b>$n7</b> em moeda é R$<b>". number_format($n7, 2, ",",".") . "</b>.<br><br>"
    ?>
</body>
</html>