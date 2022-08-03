<?php 
include('conexion.php');
$id=$_GET['id'];

mysqli_query($conexion_db, "UPDATE pedidos_php_avanzado SET entregado='entregado' WHERE ID=$id");
header("location: ../index.php?ruta=ver_pedidos");
