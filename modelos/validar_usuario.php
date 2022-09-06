<?php
require_once "./dbPedidos.php";
session_start();

$usuario= $_POST['usuario'];
$clave= $_POST['clave'];

$validacion = new dbPedidos();


$consulta = $validacion->validarUsuario($usuario, $clave);
if (mysqli_num_rows($consulta) == 0){
    header('location: ../index.php?');
}else{
    $_SESSION['admin'] = $_POST['usuario'];
    header('location: ../index.php?ruta=formulario_pedido');
}
