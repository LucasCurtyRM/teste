<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06</title>
    <style>
        h3{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Operadores de Atribuição</h1>
    <?php
        $x = 4;
        $y = 5;
        $z = null;
        // Operadores de Atribuução
            // Adição
            $z = $z + $x;
            $z += $x;
            // Subtração
            $z = $z - $y;
            $z -= $y;
            // Multiplicação
            $z = $z * $x;
            $z *= $x;
            //Divisão
            $z = $z / $y;
            $z /= $y; 
            //Módulo
            $z = $z % $x;
            $z %= $x;
            //Concatenação
            $z = $z . $y;
            $z .= $y;
            //Somar com mais 1
            $z = $z+ 1;
            $z += 1;
            $z++
            ?>
        <h3>Exercicio 01.1: Acrescentar 10% no valor de um produco com valor incial de 1200.</h3>

        <?php
        $num = 1200;
        $num += ($num * 10 / 100);
        echo "O novo preço será  <b>" . number_format($num, 2, ",",".") ."</b>.<br><br>";
        ?>
        <h3>Exercicio 01.2: Diminuir 10% no valor de um produco com valor incial de R$ 1200,00.</h3>
        <?php
        $num = 1200;
        $num -= ($num * 10 / 100);
        echo "O valor será de <b>" . number_format($num, 2, ",", ".") . "</b>. <br><br>";
        ?>

        <?php
            $z = null;
            //Operaores de Incremento
                //Pré-Incremento
                ++$z;//$z = $z + 1;
                //Pós-Incremento
                $z++; // $z = $z +1
                //Pré-Decremento
                --$z; //$z = $z -1;
                //Pós-Decremento
                $z--; //$z = $z -1;
        ?>

        <h3>Exercicio 02.1: Mostrar qual foi o ano anterior do ano atual.</h3>
        <?php
        $atual = date("Y");  // Variável $atual recebe o ano atual disponível pelo computador
        echo "O ano atual é <b>$atual</b> e o ano anterior é <b>". --$atual . "</b>." ;
        ?>

        <h3>Exercicio 02.1: Mostrar qual será 0 ano posterior do ano atual.</h3>
        <?php
        echo "O ano atual é <b>$atual</b> e o ano posterior será <b>" . ++$atual . "</b>."; 
        ?>
        
        <h3>Variáveis Referenciais</h3>
        <?php
            // Variáveis Referenciadas
            $x = 3;
            $y = &$x;
            $y += 5;
            echo "valor de x = <b>$x</b> <br>";
            echo "valor de y = <b>$y</b>";
        ?>

        <h3>Variáveis de Variáveis</h3>
        <?php
            //Variáveis de Variáveis
            $x = "ABC";
            $$x = "XYZ";
            echo "O conteudo da variável X é <b>$x</b>. <br>";
        echo "A variável<b>$x</b> criada recebeu o valor <b>$ABC</b>.";
        ?>
    
    </body>
</html>