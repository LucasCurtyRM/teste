<?php
$idade = date("Y") - ($nascimento = $_POST['nascimento']);
echo "Sua idade é: <b>$idade</b>! <br><br>";

if($idade >= 18){
    $votar = "já pode Votar!";
    $dirigir = "já pode Dirigir!";
}
else{
    $votar = "não pode Votar!";
    $dirigir = "não pode Dirigir!";
}

echo "Voce <b>$votar</b> <br>";
echo "Você <b>$dirigir</b>";
?>