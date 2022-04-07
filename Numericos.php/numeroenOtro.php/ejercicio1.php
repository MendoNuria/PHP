
<?php
//buclefortabla
if(isset($_POST["campo1"]))
{
    $CampoTexto = $_POST["campo1"];
    $CampoTexto2 = $_POST['campo2'];
    $CampoTexto3 = $_POST['campo3'];
    $aux=$CampoTexto2+$CampoTexto3;
    $aux1=$CampoTexto+$CampoTexto3;
    $aux2=$CampoTexto2+$CampoTexto;
    if($CampoTexto==$aux){
        echo "$aux es la suma de $CampoTexto2 y $CampoTexto3";
    }
    if($CampoTexto2==$aux1){
        echo "$aux1 es la suma de $CampoTexto y $CampoTexto3";
    }
    if($CampoTexto3==$aux2){
        echo "$aux2 es la suma de $CampoTexto2 y $CampoTexto";
    }
} 
?>