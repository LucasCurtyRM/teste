<?php
$diaSemana = $_POST['dia'];
    
    switch($diaSemana){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5;
        case 6:
            echo "Hoje tem aula! ;c";
            break;
        case 7:
        case 8:
            echo "Descanse! :v";
            break;
    default:
        echo "Dia da semana inválido! xg";
    }
?>
<br>
<a href="javascript:history.go(-1)">Voltar</a>