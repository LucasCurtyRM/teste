<?php
$numero = $_POST['numero'];
$operacao = isset($_POST['operacao'])?$_POST['operacao']:1;

    switch($operacao){
        case 1:
            $resultado = $numero * 2;
            break;
        case 2:
            $resultado = $numero ^ 3;
            break;
        case 3:
            $resultado = sqrt($numero);
    }
echo "O resultado da Operação escolhida: <b>$resultado</b>";
?>
<a href="./index.html">Voltar</a>