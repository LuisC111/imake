<?php 
    require_once('model/pedidos_model.php');

    class pedido_controller{

        private $model_e;
        private $model_p;

        function __construct(){
            $this->model_e=new pedido_model();
        }

        function index(){
            $query =$this->model_e->get();

            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }
        function estudiante(){
            $data=NULL;
            if(isset($_REQUEST['idpedido'])){
                $data=$this->model_e->get_id($_REQUEST['idpedido']);    
            }
            $query=$this->model_e->get();
            include_once('vistas/header.php');
            include_once('vistas/pedidos.php');
            include_once('vistas/footer.php');
        }

        function get_datosE(){

            
            $data['idpedido']=$_REQUEST['txt_idpedido'];
            $data['domicilio']=$_REQUEST['txt_domicilio'];
            $data['valortotalpedido']=$_REQUEST['txt_valortotalpedido'];
        

            if ($_REQUEST['idpedido']=="") {
                $this->model_e->create($data);
            }
            
            if($_REQUEST['idpedido']!=""){
                $date=$_REQUEST['idpedido'];
                $this->model_e->update($data,$date);
            }
            
            header("Location:index.php");

        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['idpedido']!=0) {
               $data=$this->model_e->get_id($_REQUEST['idpedido']);
            }

            if ($_REQUEST['idpedido']==0) {
                $date['idpedido']=$_REQUEST['txt_idpedido'];
                $this->model_e->delete($date['idpedido']);
                header("Location:index.php");
            }

            include_once('vistas/header.php');
            include_once('vistas/confirm.php');
            include_once('vistas/footer.php');
            


        }


    }
?>