<?php
    session_start();
    require_once ('../model/loginModel.php');

    $login = new Login();
    
    $usuario=isset($_POST["correo"])? limpiarCadena($_POST["correo"]):"";
    $contraseñaUsu=isset($_POST["password"])? limpiarCadena($_POST["password"]):"";

    $rspta=$login->Validar($usuario,$contraseñaUsu);
	$fetch=$rspta->fetch_object();

    switch ($_POST['btnIniciar']) {
        case 'Iniciar Sesion':
            if(isset($fetch)){
                $_SESSION['username']=$usuario;
                echo  "<script> alert ('Bienvenido a el sistema IMAKE $usuario');
                location.href = '../perfiladmin/PerfilAdmin.php';
                </script>";
            }else{
                echo'<script type="text/javascript">
                alert("!ERROR 401! \n los datos proporcionados no coinciden con una credencial de acceso, por favor intente de nuevo");
                window.location.href="../views/login.php";
                </script>';
            }
        break;
}
?>