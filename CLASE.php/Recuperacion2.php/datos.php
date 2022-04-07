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
/*
En una etiqueta h3 tenéis que mostrar: 
“Esta es tu relación peso/altura elevada al cuadrado:” y poneis el resultado a continuación.

En un párrafo en negrita teneis que decir:
si la edad es inferior a 10, tiene que poner “eres un niño” o “eres una niña”
si la edad está comprendida entre 10 y 20, tiene que poner “eres un adolescente” o “eres una adolescente”
si la edad es superior a 20 tiene que poner “eres un hombre” o “eres una mujer” */

$edad=$_POST["edad"];
$sexo=$_POST["sexo"];
$peso=$_POST["peso"];
$altura=$_POST["altura"];

$relacion = $peso / ($altura * $altura);

//echo "El imc de la persona es: " . round($relacion, 2) . "<br>";
echo "<h3> Esta es tu relación peso/altura elevada al cuadrado:  $relacion  </h3>";
echo "<br>";
if ($edad < 10 and $sexo == "hombre") {
    echo "<p>$genero  Eres un niño de menos de 10 años   </p>";
}else if ($edad < 10 and $sexo == "mujer"){
    echo "<p>$genero  Eres un niña de menos de 10 años   </p>";
}else if ($edad >= 10 && $edad < 20    and $sexo == "hombre" ){
    echo "<p>$genero   Eres un adolescente entre 10 y 20 años   </p>";
}else if ($edad >= 10 && $edad < 20    and $sexo == "mujer"){
    echo "<p>$genero   Eres una adolescente entre 10 y 20 años   </p>";

}else if ($edad >= 20  and $sexo == "hombre"){
    echo "<p>$genero   Eres un hombre  con más de 20 años  </p>";
}else if ($edad >= 20  and $sexo == "mujer"){
    echo "<p>$genero   Eres un mujer  con más de 20 años  </p>";
}


   



    ?>
</body>
</html>