<?php 

class dbPedidos
{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "Erick_teper";
    /*
    private $host = "localhost";
    private $user = "id18194560_erick";
    private $pass = "K5o&w~M>9_+!OQ19";
    private $db_name = "id18194560_erick_teper";
    */

    private $conexion;
    private $error = false;


    function __construct()
    {
        $this->conexion = mysqli_connect($this->host, $this->user , $this->pass,
        $this->db_name);
        if ($this->conexion->connect_errno){
            $this->error=true;
        }
    }

    function hayError(){
        return $this->error;
    }


    public function mostrarEntregados(){
        if ($this->error==false){  
            $consulta = mysqli_query($this->conexion, "SELECT * FROM pedidos WHERE entregado='entregado'");
            return $consulta;
        }else{
            return null;
        }
    }

    public function mostrarPedidos(){
        if ($this->error==false){ 
            $consulta = mysqli_query($this->conexion, "SELECT * FROM pedidos WHERE entregado='procesando'");
            return $consulta;
        }else{
            return null;
        }
    }

    public function altaPedidos($hamburguesa, $num_medallones, $papas, $agregado, $comentario, $precio){
        if ($this->error==false){ 
            mysqli_query($this->conexion, "INSERT INTO pedidos VALUES(DEFAULT, '$hamburguesa', '$num_medallones', '$papas',
            '$agregado[0]', '$agregado[1]', '$agregado[2]', '$comentario', $precio, 'procesando')" );
        }else{
            return null;
        }
    }

    public function entregado($id){
        mysqli_query($this->conexion, "UPDATE pedidos SET entregado='entregado' WHERE ID=$id");
        header("location: ../index.php?ruta=ver_pedidos");
    }

    public function reclamar($reclamo, $nombre_img){ 
        mysqli_query($this->conexion, "INSERT INTO reclamos VALUES(DEFAULT, '$reclamo', '$nombre_img')" );   
        header("Location: ../index.php?ruta=ver_entregados");
    }
    
    public function datos_para_ticket($id){
        $consulta = mysqli_query($this->conexion, "SELECT * FROM pedidos WHERE id='$id'");
        return $consulta;
    }

    public function validarUsuario($usuario, $clave){
        $consulta = mysqli_query($this->conexion, "SELECT * FROM administradores WHERE usuario = '$usuario' AND clave = '$clave'");
        return $consulta;
    }
}