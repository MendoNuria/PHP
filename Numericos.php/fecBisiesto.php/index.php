<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora de años bisiestos (Formulario)</h1>

<form action="pagina2.php" method="get">
  <p>Escriba un año (0 &le; año &lt; 10.000) para comprobar si es bisiesto o no.</p>

  <p><label>Año: <input type="number" name="anyo" min="0" max="10000"></label></p>

  <p>
    <input type="submit" value="Comprobar">
    <input type="reset" value="Borrar">
  </p>
</form>


</body>
</html>