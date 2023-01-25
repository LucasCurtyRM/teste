<?php
$idade = date("Y") - ($nascimento = $_POST['nascimento']);
echo "Sua idade é: <b>$idade</b>! <br><br>";

    if($idade < 16){
    $tipoVoto = "Não Vota!";
    }
    else if(($idade >=16 && $idade <= 18)  || ($idade > 65)){
        $tipoVoto = "Voto Opcional!";
    }
    else{
    $tipoVoto = "Voto Obrigatório!";
    }

echo "Para a sua idade, <b>$tipoVoto</b> <br>";
?>