<?php
    require_once('cnection/conexion.php');
    require_once('controller/pedidos_controller.php');

    $controller= new pedido_controller();
    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
    }




?>