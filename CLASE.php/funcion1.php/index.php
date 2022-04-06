<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   echo "<h3> Repetir palabrasveces</h3>";
function funcionX($palabra1, $palabra2){
        echo "<p>  $palabra1 $palabra2 'hola' $palabra1 $palabra2</p>";
    }

echo funcionX("Perro", "Pedro");

//repetir solo letras de una palabra.
echo "<h3> Repetir letras dos veces</h3>";
function caracterDuplicado($texto){
    $tamano = strlen($texto);
    $cadena1 = "";
        for ($i = 0; $i < $tamano; $i++){
            $cadena1 = $cadena1 . $texto[$i] .$texto[$i];
        }
        return $cadena1;
}
$nombre = "perro";
$nombre1 = "Pedro";
$texto = $nombre . ' hola ' . $nombre1;
echo caracterDuplicado($texto);
echo "<br>";
///// Repetirlo 3 veces


echo "<h3> Repetir letras tres veces</h3>";
function caracterTriplicado($texto , $numero){
    $tamano = strlen($texto);
    $cadena1 = "";
    //$numero = 3;
    
        for ($i =0; $i < $tamano; $i++){
            //$cadena1 = $cadena1 . $texto[$i] .$texto[$i] .$texto[$i];
            for ($m = 0; $m < $numero; $m ++){
                $cadena1 = $cadena1 . $texto[$i];
            }
        }
        return $cadena1;
}


$nombre = "perro";
$nombre1 = "Pedro";
$texto22 = $nombre . ' hola ' . $nombre1;
echo caracterTriplicado($texto22 , 10);


   ?> 
</body>
</html>