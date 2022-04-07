<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3 Recuperacion</title>
    <link rel="stylesheet" href="ejercicio1.css">
</head>
<body>
    <!--
Tenéis que hacer una función que sume 3 números, y saque por pantalla en un h1 los 3 números introducidos
 y el resultado de la suma.

Llamar a la función con los números 3, 20 y 2.

Llamar a la función con los números 5, 7 y -11.

Tenéis que hacer una función que pueda sacar por pantalla las 5 imágenes que están subidas en el examen 
dependiendo de la variable de entrada.

Llamar a la función para que saque la imagen  a2 
Llamar a la función para que saque la imagen a4
-->

<?php
function sumar ($num1, $num2,$num3){
$resultado = $num1 + $num2 + $num3;
return $resultado;
}
echo "<h1> La suma de los  numeros $num1  $num2 $num3 da como reultado $resultado </h1>";
echo sumar(2, 20, 2);
echo "<br>";
echo sumar(5, 7, -11);



echo "<br>";
//////
function imagenes ($numeroImagen){

    $imagenes = ["<img src='a1.jpg'> " , 
                    "<img src='a2.jpg'> " , 
                    "<img src='a3.jpg'> " ,  
                    "<img src='a4.jpg'> " , 
                    "<img src='a5.jpg'> " ];
                    
                    
    echo "<h1>  $imagenes[$numeroImagen] </h1>";
               // echo "<h1>  $imagenes[$numeroImagen] </h1>";


}
 imagenes (1);
 imagenes (4);


    ?>
    
</body>
</html>