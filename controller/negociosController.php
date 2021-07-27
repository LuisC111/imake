<?php 
session_start();
require_once "../model/negocioModel.php";

$Negocio = new Negocio();

$idUsu=isset($_POST["idUserNew"])? limpiarCadena($_POST["idUserNew"]):"";
$usu=isset($_POST["userNew"])? limpiarCadena($_POST["userNew"]):"";
$contUsu=isset($_POST["contUsu"])? limpiarCadena($_POST["contUsu"]):"";
$nomUsu=isset($_POST["nomUsu"])? limpiarCadena($_POST["nomUsu"]):"";
$apellidoUsu=isset($_POST["apelliUsu"])? limpiarCadena($_POST["apelliUsu"]):"";
$tipoDocUsu=isset($_POST["tipoDocUsu"])? limpiarCadena($_POST["tipoDocUsu"]):"";
$docUsu=isset($_POST["docUsu"])? limpiarCadena($_POST["docUsu"]):"";
$estUsu=isset($_POST["estUsu"])? limpiarCadena($_POST["estUsu"]):"";
$tipoUsu=isset($_POST["idTipoUsu"])? limpiarCadena($_POST["idTipoUsu"]):"";
$codEsp=isset($_POST["idTipoEsp"])? limpiarCadena($_POST["idTipoEsp"]):"";


switch ($_POST['btnCrud']) {
        case 'Crear':
                $rspta=$Usuario->insertar($idUsu,$usu,$contUsu,$nomUsu,$apellidoUsu,$tipoDocUsu,$docUsu,$estUsu,$tipoUsu,$codEsp);
                echo $rspta ? "<script> alert ('Datos registrados correctamente');
                location.href = '../views/usuarios.php';
                </script>" : "No se pudo registrar todos los datos del usuario";
        break;
        case 'Modificar':
                $rspta=$Usuario->editar($idUsu,$usu,$contUsu,$nomUsu,$apellidoUsu,$tipoDocUsu,$docUsu,$estUsu,$tipoUsu,$codEsp);
                echo $rspta ? "<script> alert ('Datos actualizados correctamente');
                location.href = '../views/usuarios.php';
                </script>" : "No se pudo actualizar los datos";
        break;
        case 'Inactivar':
                $rspta=$Usuario->inactivar($idUsu);
                echo $rspta ? "<script> alert ('Usuario Inactivado Correctamente ');
                location.href = '../views/usuarios.php';
                </script>" : "No se pudo inactivar el usuario";
        break;
        case 'Activar':
                $rspta=$Usuario->activar($idUsu);
                echo $rspta ? "<script> alert ('Usuario Activado Correctamente');
                location.href = '../views/usuarios.php';
                </script>" : "No se pudo Activar los datos";
        break;
}
?>