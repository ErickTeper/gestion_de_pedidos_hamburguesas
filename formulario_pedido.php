<?php 
include('header.php');
session_start();
if(isset($_SESSION['admin'])){
?> 


<div class="base">
    <form action="cargar_pedido.php" method="POST" class="formulario" enctype="multipart/form-data">
        
        <h2 class="titulo">SOLICITAR HAMBURGUESA</h2>
        <h3 class="form_items">HAMBURGUESA</h3>
        <select name="hamburguesa" id="">
            <option value="clasica">Clasica</option>
            <option value="criolla">Criolla</option>
            <option value="americana">Americana</option>
            <option value="mexicana">Mexicana</option>
        </select>

        <h3 class="form_items">Nº DE MEDALLONES
        <input type="number" name="num_medallones" value="1" min='1' max='3'></h3>

        <label><input name="papas" type="checkbox" value="papas"> papas</label>


        <h3 class="form_items">AGREGADOS</h3>
        <select name="agregado1" id="">
            <option value="">-</option>
            <option value="cheddar">cheddar extra</option>
            <option value="cebolla">Cebolla</option>
            <option value="pepinillos">pepinillos</option>
            <option value="guacamole">guacamole</option>
            <option value="chimi">chimi</option>
        </select>
        <select name="agregado2" id="">
            <option value="">-</option>
            <option value="cheddar">cheddar extra</option>
            <option value="cebolla">Cebolla</option>
            <option value="pepinillos">pepinillos</option>
            <option value="guacamole">guacamole</option>
            <option value="chimi">chimi</option>
        </select>
        <select name="agregado3" id="">
            <option value="">-</option>
            <option value="cheddar">cheddar extra</option>
            <option value="cebolla">Cebolla</option>
            <option value="pepinillos">pepinillos</option>
            <option value="guacamole">guacamole</option>
            <option value="chimi">chimi</option>
        </select>

        <h3 class="form_items">COMENTARIO</h3>
        <textarea name="comentario" id="" cols="30" rows="5" placeholder="comentario"></textarea>
    
        
        <input type="submit" value="Cargar Pedido" name="subir">

        

    </form>
    </div>

<?php
    if (isset($_GET['ok'])){
        echo '<h2 class="alert">pedido enviado</h2>';
    }
}else{
    header("Location: index.php?");
}
?>

</html>