<?php 
//include('header.php');
include('../modelos/funcionalidades.php');

$id=$_GET['id'];

$consulta = datos_para_ticket($id);
while($mostrar= mysqli_fetch_assoc($consulta)){

    /*Datos funciones de hora*/
    date_default_timezone_set("America/Argentina/Buenos_Aires");  

    $hora = time();
    $dia_hora = date("d-m-Y (H:i:s)", $hora);

    /* Muestro archivo */
    $texto = $dia_hora. "\rHAMBURGUESA ".$mostrar['hamburguesa']."\rMEDALLONES: ".$mostrar['medallones'].
    "\rPAPAS ".$mostrar['papas']."\rAGREGADOS: ".$mostrar['agregado1']." ".$mostrar['agregado2']." ".$mostrar['agregado3'].
    "\r\r TOTAL........$".$mostrar['precio'];
}

    $archivo = fopen('./tickets/pedido'.$id.'.txt', 'w');
    fputs($archivo, $texto);

    header("Location: ../index.php?ruta=ver_entregados");