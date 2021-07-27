<?php
    
    class pedido_model{
        private $DB;
        private $pedidos;

        function __construct(){
            $this->DB=Database::connect();
        }

        function get(){
            $sql= 'SELECT * FROM pedido ORDER BY idpedido DESC';
            $fila=$this->DB->query($sql);
            $this->pedidos=$fila;
            return  $this->pdidos;
        }

        function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO pedido(idpedido,domicilio,valortotalpedido)VALUES (?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['idpedido'],$data['domicilio'],$data['valortotalpedido']));
            Database::disconnect();       

        }
        function get_id($idpedido){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM pedido where idpedido = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function update($data,$date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE pedido  set  domicilio=?, valortotalpedido =? WHERE idpedido = ? ";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['domicilio'],$data['valortotalpedido'], $date));
            Database::disconnect();

        }

        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="DELETE FROM pedido where idpedido=?";
            $q=$this->DB->prepare($sql);
            $q->execute(array($date));
            Database::disconnect();
        }
    }
?>

