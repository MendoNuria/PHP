<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 Recuperacion</title>
    <link rel="stylesheet" href="ejercicio1.css">
</head>
<body>
    <!--
Tenéis que utilizar un formulario POST para recoger el peso, la altura, la edad y el sexo
-->

   <!-- <div class="izquierda">
            <h1>Div Izquierda</h1>
    </div>

    <div class="derecha">
            <h1>Div derecha</h1>
    </div>
-->
    
<form action="datos.php" method="post">

<p>Escribe tu edad <input type="text" name="edad"> </p>
<p>Escribe tu sexo <input type="text" name="sexo"> </p>
<p>Escribe tu peso <input type="text" name="peso"> </p>
<p>Escribe tu altura <input type="text" name="altura"> </p>
<input type="submit" value="enviar">


</form>




</body>
</html>