<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>
<body>
    <h1>Operadores Relacionais</h1>
        <?php
        //Operadores Relacionais
        $a = null;
        $b = null;

            //Maior (>)
            $a > $b;
            //Menor (<)
            $a < $b;
            //Maior ou igual (>=)
            $a >= $b;
            //Menor ou igual (<=)
            $a <= $b;
            //Diferente (<>). (!=)
            $a <> $b;
            //Igual (==)
            $a == $b;
            //Identico (===) igual e mesmo tipo
            $a === $b;
            //Operador Unário -> expresssão(?):falso
            $maior = $a > $b ? $a : $b; //se $a > $b maior recebe $a, senão rebebe $b;
        ?>
            <h3>Exercicio 01: permitir que o usuário escolha entre somar e multiplicar dois números</h3>
            <?php
                $n1 = 3;
                $n2 = 5;
                $tipo = $_GET["op"];
            echo "Os valores passador foram <b>$n1</b> e <b>$n2</b>. <br>";
                $resultado = ($tipo == "s")?$n1+$n2:$n1*$n2;
                echo "O Resoltado da operação escolhida é: <b>" . $resultado . "</b>";
            ?>
            <h3>Passar a situação de um aluno de acordo com as sua média. (média 7)</h3>
            <?php
            $nota1 = 5;
            $nota2 = 7;
            $nota3 = 9;
            $nota4 = 6;
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
            $situacao = $media >= 7 ? "APROVADO" : "REPROVADO";
            echo "A média do aluno é: <b>$media</b>, logo o aluno está <b>$situacao</b>."
            ?>

            <?php
                //Operadores Lógicos
                    //Operador (AND), *E*, &&
                    //Operador (OR), *OU*, ||
                    //Operador (XOR), *OU EXCLUSIVO*
                    //Operador (NOT), *NÃO*, !
            ?>
            <h3>Mostrar se um eleitor é obrigado a votar ou não (idade obrigatória: 18 anos).</h3>
            <?php
            $ano = $_GET['data'];
            $idade = date("Y") - $ano;
            $obrigado = ($idade>=18 && $idade<65)?"Obrigatório":"Não Obrigatório";
            echo "Quem nasceu em <b>$ano</b>, possuiu <b>$idade</b> anos, logo <b>$obrigado</b>"
            ?>
</body>
</html>