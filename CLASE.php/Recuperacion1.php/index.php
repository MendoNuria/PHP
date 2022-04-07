<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 Recuperacion</title>
    <link rel="stylesheet" href="ejercicio1.css">
</head>
<body>
    <!--Tenéis que utilizar los archivos subidos al examen para este ejercicio, los archivos ejercicio1.php y ejercicio1.css.

Utilizando php:

En el div de la izquierda tenéis que introducir 40 párrafos mediante el uso de un loop.

En los 20 primeros debe de decir “Este parrafo es de color azul” y lo teneis que pintar de color azul.

En los 20 siguientes debe decir “Este parrafo es de color verde” y lo teneis que pintar de color verde.


En el div de la derecha tenéis que introducir 12 links a google mediante el uso de un loop.
-->

<div class="izquierda">
            <h1>Div Izquierda</h1>

            <?php
    for ($i = 0; $i <= 40; $i++) {

        if ($i >= 20 ) {

            echo " <p class = 'azul' >Este parrafo es de color azul  </p>";
        } else {
            echo "<p  class = 'verde' > Este parrafo es de color verde  </p>";
        }
    }
    ?>

    </div>

    <div class="derecha">
            <h1>Div derecha</h1>
 
            <?php
    for ($i = 0; $i <= 12; $i++){
     echo   "<a href=\" https://www.google.com \">Google</a> <br>";


    }
    ?>

    
   </div>


</body>
</html>