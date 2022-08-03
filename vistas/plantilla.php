<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" type="text/css" href="./estilos/estilos.css">
</head>
<body>

<header>
    <div class="logo"><h1>SISTEMA DE PEDIDOS<h1> </div>
    <nav>
        <ul class="botonera">
            <li class="botones"><a class="botones_vinc" href="./index.php?ruta=formulario_pedido">GENERAR PEDIDO</a></li>
            <li class="bonotes"><a class="botones_vinc" href="./index.php?ruta=ver_pedidos">VER PEDIDOS</a></li>
            <li class="botones"><a class="botones_vinc" href="./index.php?ruta=ver_entregados">PEDIDOS ENTREGADOS</a></li>
            <li class="botones"><a class="botones_vinc" href="./index.php?ruta=cerrar_sesion">CERRAR SESION</a></li>
        </ul>
    </nav>
</header> 
<section>
    <?php 

//DEBO TERMINAR DE IMPLEMENTAR LAS SESIONES
//if(isset($_SESSION['admin'])){     
        
    if(!$_GET){
        include "paginas/inicio.php";
    }elseif(isset($_GET["ruta"])){
            if(
              $_GET["ruta"]=="formulario_pedido" ||
              $_GET["ruta"]=="ver_pedidos" ||
             $_GET["ruta"]=="ver_entregados"
            ){
               include "paginas/" . $_GET["ruta"] . ".php";    
             }else{
             include "paginas/error404.php";
            }
        }
  //      }else{
    //        include "paginas/inicio_sesion.php";
     //   }

        ?>
</section>