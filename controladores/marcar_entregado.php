<?php
require_once "../modelos/dbPedidos.php";

$id=$_GET['id'];

$entregado = new dbPedidos();
$entregado->entregado($id);