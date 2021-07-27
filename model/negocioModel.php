<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Negocio
{
    
    //implementamos nuestro constructor
    public function __construct()
    {
    }
    
    //metodo insertar registro
    public function insertar($PidNegocio,$PnombreNegocio,$PdireccionNegocio,$PnitNegocio,$PestadoNegocio,$PidTipoNegocio,$PidBarrio,$PidUsuario,$PidPeticionNegocio)
    {
        $sql="CALL insertarDatosNegocio('$PidNegocio','$PnombreNegocio','$PdireccionNegocio','$PnitNegocio','$PestadoNegocio','$PidTipoNegocio','$PidBarrio','$PidUsuario','$PidPeticionNegocio');";
        //return ejecutarConsulta($sql);
        ejecutarConsulta($sql);
        $z=ejecutarConsulta_retornarID($sql);
        $num_elementos=0;
        $sw=true;
        return $sw;
    }
    public function editar($PidUsuario,$PnombreUsuario,$PapellidoUsuario, $PcontraseñaUsuario,$PcorreoUsuario, $PfechaNacimiento, $PdocumentoUsuario, $PestadoUsuario){
        $sql="CALL ActualizarDatosUsuario('$PidUsuario','$PnombreUsuario','$PapellidoUsuario', '$PcontraseñaUsuario','$PcorreoUsuario', '$PfechaNacimiento', '$PdocumentoUsuario', '$PestadoUsuario');";
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