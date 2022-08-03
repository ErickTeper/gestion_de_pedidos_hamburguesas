<?php
session_start();

$usuario= $_POST['usuario'];
$clave= $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = '$usuario' AND clave = '$clave'");

if (mysqli_num_rows($consulta) == 0){
    header('location: index.php?error');
}else{
    $_SESSION['admin'] = $_POST['usuario'];
    header('location:formulario_pedido.php');
}
