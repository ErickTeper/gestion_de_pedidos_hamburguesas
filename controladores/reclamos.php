<?php
include('../modelos/funcionalidades.php');

$reclamo = $_POST["reclamo"];

$nombre_img = $_FILES["imagen"]["name"];
$tamanio_img = $_FILES["imagen"]["size"];
$tipo_img = $_FILES["imagen"]["type"];
$tmp_img = $_FILES["imagen"]["tmp_name"];

$destino = 'reclamos/'.$nombre_img;

if(($tipo_img != 'image/jpg' && $tipo_img != 'image/jpeg' && $tipo_img != 'image/png' 
&& $tipo_img != 'image/gif' && $tipo_img != 'image/webp' ) or ($tamanio_img > 200000 ) ){
    header('Location: ver_entregados.php?error_reclamo');
}else{
move_uploaded_file($tmp_img, $destino); 
reclamar($reclamo, $nombre_img);
}