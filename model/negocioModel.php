<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Usuario
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($PidUsuario,$Pusuario, $PcontraseñaUsuario, $PnombreUsuario, $PapellidoUsuario, $PtipoDocUsuario, $PdocUsuario, $PestadoUsuario, $PidTipoUsuario, $PidEspecialidad)
    {
        $sql="CALL insertarDatosUsuario('$PidUsuario','$Pusuario','$PcontraseñaUsuario','$PnombreUsuario','$PapellidoUsuario','$PtipoDocUsuario','$PdocUsuario','$PestadoUsuario','$PidTipoUsuario','$PidEspecialidad');";
        //return ejecutarConsulta($sql);
        ejecutarConsulta($sql);
        $z=ejecutarConsulta_retornarID($sql);
        $num_elementos=0;
        $sw=true;
        return $sw;
    }
    public function editar($PidUsuario,$Pusuario, $PcontraseñaUsuario, $PnombreUsuario, $PapellidoUsuario, $PtipoDocUsuario, $PdocUsuario, $PestadoUsuario, $PidTipoUsuario, $PidEspecialidad){
        $sql="CALL ActualizarDatosUsuario('$PidUsuario','$Pusuario','$PcontraseñaUsuario','$PnombreUsuario','$PapellidoUsuario','$PtipoDocUsuario','$PdocUsuario','$PestadoUsuario','$PidTipoUsuario','$PidEspecialidad');";
        ejecutarConsulta($sql);
        $sw=true;
        return $sw;
    }

    public function Consultar($PidUsuario){
        $sql="CALL consultarDatosUsuario('$PidUsuario');";
        return ejecutarConsulta($sql); 
    }
    
    public function inactivar($PidUsuario){
        
        $sql="CALL CambioEstadoUsuario('$PidUsuario');"; 
        return ejecutarConsulta($sql);

    }
    public function activar($PidUsuario){

        $sql="CALL CambioEstadoUsuarioActivo('$PidUsuario');"; 
        return ejecutarConsulta($sql);

    }
    
}
?>