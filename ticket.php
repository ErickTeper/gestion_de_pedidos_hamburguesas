<?php 
include('header.php');
include('conexion.php');

$id=$_GET['id'];

$consulta = mysqli_query($conexion_db, "SELECT * FROM pedidos WHERE id='$id'");
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

    mysqli_close($conexion_db);

    header("Location: ver_entregados.php?ticket");