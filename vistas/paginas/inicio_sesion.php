

<section class="contenedor_carga">
    


    <form action="./modelos/validar_usuario.php" method="POST" id='form_login'>
        <h2>Login</h2>
        <h3>bienvenido! inicie sesion para usar el sistema</h3>
        <input type="text" name="usuario" required placeholder="Usuario" class="input_log">
        <input type="password" name="clave" required placeholder="clave" class="input_log">
        <input type="submit" value="Ingresar" class="input_log">

    </form>

    <?php
    if (isset($_GET['error'])){
        echo "<h3>Datos incorrectos<h3>";
    }
    
    ?>

 </section>



</body>
</html>