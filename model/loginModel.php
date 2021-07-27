<?php 
//incluir la conexion de base de datos
require "../config/conexion.php";
class Login
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function Validar($correoUsuario,$contraseñaUsuario)
    {
        $sql="SELECT * FROM USUARIO WHERE correoUsuario = '$correoUsuario' and contraseñaUsuario = '$contraseñaUsuario'";
        return ejecutarConsulta($sql);  
}
}
?>