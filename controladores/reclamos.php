<?php
# Se guardan las imágenes en la carpeta de reclamos
# Se guardan en la bases de datos nombre de imagen y descripcion del reclamo

require_once "../modelos/dbPedidos.php";

$reclamo = $_POST["reclamo"];

$nombre_img = $_FILES["imagen"]["name"];
$tamanio_img = $_FILES["imagen"]["size"];
$tipo_img = $_FILES["imagen"]["type"];
$tmp_img = $_FILES["imagen"]["tmp_name"];

$destino = 'reclamos/'.$nombre_img;

if(($tipo_img != 'image/jpg' && $tipo_img != 'image/jpeg' && $tipo_img != 'image/png' 
&& $tipo_img != 'image/gif' && $tipo_img != 'image/webp' ) or ($tamanio_img > 400000 ) ){
    header('Location: ver_entregados.php?error_reclamo');
}else{
    $db = new dbPedidos();
    move_uploaded_file($tmp_img, $destino); 
    $db->reclamar($reclamo, $nombre_img);
}
