<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;

    if($media < 5){
        $resultado = "Reprovado!";
    }
    else if(($media >=5) &&($media < 7)){
        $resultado ="Recuperação!";
    }
    else{
        $resultado = "Aprovado!";
    }
echo "Nota 1: <b style='color: #c82f2f;'>$nota1</b>."."Nota 2: <b style='color: #c82f2f';'>$nota2</b><br><br>";
    echo "A média é: <b style='color: #2780d0;'>$media</b><br>";
    echo "A sua situação é <b style='color: #c82f2f;'>$resultado</b>";

?>