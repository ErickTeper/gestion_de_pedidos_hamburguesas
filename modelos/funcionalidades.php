<?php 

function reclamar($reclamo, $nombre_img){
    include('conexion.php');    
    mysqli_query($conexion_db, "INSERT INTO reclamos_php_avanzado VALUES(DEFAULT, '$reclamo', '$nombre_img')" );   
    mysqli_close($conexion_db);
    header("Location: ../index.php?ruta=ver_entregados");
}

function datos_para_ticket($id){
    include('conexion.php');
    $consulta = mysqli_query($conexion_db, "SELECT * FROM pedidos_php_avanzado WHERE id='$id'");
    mysqli_close($conexion_db);
    return $consulta;
}

function mostrar_pedidos(){
    include('conexion.php');
    $consulta = mysqli_query($conexion_db, "SELECT * FROM pedidos_php_avanzado WHERE entregado='procesando'");
    mysqli_close($conexion_db);
    return $consulta;
}

function mostrar_entregados(){
    include('conexion.php');
    $consulta = mysqli_query($conexion_db, "SELECT * FROM pedidos_php_avanzado WHERE entregado='entregado'");
    mysqli_close($conexion_db);
    return $consulta;
}
