
<?php
include('./modelos/dbPedidos.php');
session_start();
if(isset($_SESSION['admin'])){
?>

<div class='lista_pedidos'>
<?php
$pedidos = new dbPedidos();
$consulta = $pedidos->mostrarEntregados();
while($mostrar= mysqli_fetch_assoc($consulta)){
?>

<div class="pedido_entregado">
    <div class='datos_cosulta'><p>Nº: <?php echo $mostrar['id']?></p></div>
    <div class='datos_cosulta'><p>HAMBURGUESA: <?php echo $mostrar['hamburguesa']?></p></div>
    <div class='datos_cosulta'><p>Nº MEDALLONES:<?php echo $mostrar['medallones']?></p></div>
    <div class='datos_cosulta'><p>PAPAS: <?php echo $mostrar['papas']?></p></div>
    <div class='datos_cosulta'><p>AGREGADO:<?php echo $mostrar['agregado1']?></p></div>
    <div class='datos_cosulta'><p>AGREGADO:<?php echo $mostrar['agregado2']?></p></div>
    <div class='datos_cosulta'><p>AGREGADO:<?php echo $mostrar['agregado3']?></p><br></div>
    <div class='datos_cosulta'><p><i><?php echo $mostrar['comentarios']?></i></p><br></div>
    <div class='datos_cosulta'><p><b>PRECIO:</b> $<?php echo $mostrar['precio']?></p></div>
    <a href="./controladores/ticket.php?id=<?php echo $mostrar['id']?>" id="boton"><p>GENERAR TICKET</p></a>
    
    <form action="./controladores/reclamos.php" method="POST" enctype="multipart/form-data">
    <textarea name="reclamo" id="" cols="30" rows="3" placeholder="reclamo"></textarea> 
    <div><p>Subir imagen: </p><input type="file" name="imagen" value="reclamo" ></div>
    <input type="submit" value="Cargar reclamo" name="subir">
    </form>
</div>

<?php 
} 
?>

</div>
<?php 
if (isset($_GET['ticket'])){
    echo '<h2 class="alert">ticket generado</h2>';
}
if (isset($_GET['reclamo'])){
    echo '<h2 class="alert">reclamo generado</h2>';
}
if (isset($_GET['error_reclamo'])){
    echo '<h2 class="alert">formato o tamaño de imagen no aceptado</h2>';
}
}else{
    header("Location: index.php?");
}


?>