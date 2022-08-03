
<?php
include('conexion.php');
include('header.php');
session_start();


if(isset($_SESSION['admin'])){
?>

<div class='lista_pedidos'>
<?php
$consulta = mysqli_query($conexion_db, "SELECT * FROM pedidos WHERE entregado='procesando'");
while($mostrar= mysqli_fetch_assoc($consulta)){
?>

<div class="pedido_en_proceso">
    <div class='datos_cosulta'><p>Nº: <?php echo $mostrar['id']?></p></div>
    <div class='datos_cosulta'><p>HAMBURGUESA: <?php echo $mostrar['hamburguesa']?></p></div>
    <div class='datos_cosulta'><p>Nº MEDALLONES:<?php echo $mostrar['medallones']?></p></div>
    <div class='datos_cosulta'><p>PAPAS: <?php echo $mostrar['papas']?></p></div>
    <div class='datos_cosulta'><p>AGREGADO:<?php echo $mostrar['agregado1']?></p></div>
    <div class='datos_cosulta'><p>AGREGADO:<?php echo $mostrar['agregado2']?></p></div>
    <div class='datos_cosulta'><p>AGREGADO:<?php echo $mostrar['agregado3']?></p><br></div>
    <div class='datos_cosulta'><p><i><?php echo $mostrar['comentarios']?></i></p><br></div>
    <div class='datos_cosulta'><p><b>PRECIO:</b> $<?php echo $mostrar['precio']?></p></div>
    <a href="entregado.php?id=<?php echo $mostrar['id']?>" id="boton"><p>ENTREGADO</p></a>

</div>

<?php }
}else{
    header("Location: index.php?");
}
 ?>

</div>