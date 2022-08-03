<?php
include('conexion.php');
session_start();

$hamburguesa = $_POST["hamburguesa"];
$num_medallones = $_POST["num_medallones"];
$papas = isset($_POST["papas"]);
$agregado = array($_POST["agregado1"], $_POST["agregado2"], $_POST["agregado3"]);
$comentario = $_POST["comentario"];
$precio = 0;

include('calculo_precio.php');


mysqli_query($conexion_db, "INSERT INTO pedidos VALUES(DEFAULT, '$hamburguesa', '$num_medallones', '$papas',
 '$agregado[0]', '$agregado[1]', '$agregado[2]', '$comentario', $precio, 'procesando')" );

mysqli_close($conexion_db);

header("location: formulario_pedido.php?e=ok");

