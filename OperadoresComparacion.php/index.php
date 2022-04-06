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

# Comparar valores.

# $var1 == $var2    igual que       Verdadero si las dos variables son iguales.
# $var1 === $var2   identica que    Verdadero si las dos variables son iguales y del mismo tipo.
# $var1 != $var2    Diferente que   Verdadero si las dos variables NO son iguales.
# $var1 <> $var2    Diferente que   Verdadero si las dos variables NO son iguales
#                                      y ademas NO son del mismo tipo.
# $var1 <  $var2     Menor que       Verdadero si $var1 es menor que $vr2.
# $var1 <= $var2     Menor que       Verdadero si &var1 es menor o igual que $vr2.

# $var1 >  $var2     Mayor que       Verdadero si &var1 es mayor que $vr2.
# $var1 >= $var2     Mayor que       Verdadero si &var1 es mayor que $vr2.




$var1=0;
$var2="8"; // Almacena un tipo de variable tipo strin por que le he puesto comillas
$var1="Juan";
 if($var1==$var2){
    echo "Son iguales ";

 }else{
     echo "No son iguales ";
 }
 echo "<br>";
# === que el valor es el mismo y del mismo tipo
 $var1=0;
 $var2="8"; // Almacena un tipo de variable tipo strin por que le he puesto comillas
 $var1="Juan";
  if($var1===$var2){
     echo "Son iguales ";
 
  }else{
      echo "No son iguales ";
  }
  echo "<br>";
 # !>

 $var1=0;
 $var2="8"; // Almacena un tipo de variable tipo string por que le he puesto comillas
 $var1="Juan";
    if($var1!=$var3){
        echo "Son diferente ";

    }else{
        echo "Son iguales ";
     }
 echo "<br>";


 

?> 

</body>
</html>