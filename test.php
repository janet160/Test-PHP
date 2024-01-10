<?php

$name = "Jazziel";
$age = 20;
$isTrue = True;
echo "Hola mi nombre es: {$name} <br> Tengo:{$age} <br> y el estatus esta en: {$isTrue} <br> <hr>";


function suma($num1, $num2){
    $result = $num1 + $num2;   

    return $result;
}

echo "<br> El resultado de una suma que no conoces los numeros pero es: ".suma(10,22);

if($isTrue){
    echo '<br> <h3 style="color:green;">Conoces las bases de PHP</h3>';
}
else{
    echo '<br> <h3 style="color:red;>Aun no tienes las bases</h3>';
}

?>

<!-- ESTACIONAMIENTO EN PHP -->