<?php 
include('conexion.php');
$id=$_GET['id'];

mysqli_query($conexion_db, "UPDATE pedidos SET entregado='entregado' WHERE ID=$id");
header("location: ver_pedidos.php");
