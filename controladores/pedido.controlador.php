<?php
require_once "../modelos/dbPedidos.php";


$hamburguesa = $_POST["hamburguesa"];
$num_medallones = $_POST["num_medallones"];
$papas = isset($_POST["papas"]);
$agregado = array($_POST["agregado1"], $_POST["agregado2"], $_POST["agregado3"]);
$comentario = $_POST["comentario"];
$precio = 0;

include('../utilidades/calculo_precio.php');

$carga_pedidos = new dbPedidos();
$carga_pedidos->altaPedidos($hamburguesa, $num_medallones, $papas, $agregado, $comentario, $precio);
header("location: ../index.php?ruta=formulario_pedido");